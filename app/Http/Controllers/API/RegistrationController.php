<?php

namespace App\Http\Controllers\API;

use Hash;
use App\User;
use Validator;
use App\Mail\WelcomeMail;
use Illuminate\Http\Request;
use App\Mail\ConfirmationMail;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class RegistrationController extends BaseController
{
    /**
     * Register api
     *
     * @return \Illuminate\Http\Response
     */
    public function enroll(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'dob' => 'date',
            'pob' => 'string',
            'lga' => 'string',
            'first_name' => 'required|string',
            'last_name' => 'required|string',
            'email' => 'required|email|unique:users',
            'phone' => 'phone',
            'state' => 'string',
            'class' => 'string',
            'level' => 'string',
            'gender' => 'string',
            'address' => 'string|min:5',
            'occupation' => 'string|min:5',
            'nationality' => 'required|string|min:5',
            'marital_status' => 'required|string',
        ]);

        $user_id = mt_rand(1000, 9999);    
        $default_password = (str_random(8));
        $default_avatar = "https://res.cloudinary.com/iro/image/upload/v1563191501/hwlxwnp6q0eq7fwtzz5p.jpg";

        DB::beginTransaction();

        if($validator->fails()){
            $response = [
                'success' => false,
                'message' => $validator->errors(),
            ];
            return response()->json($response, 422); 
        }

        try {
            $input = $request->all();
            $input['password'] = Hash::make($default_password);
            $input['default_password'] = $default_password;
            $input['user_id'] = $input['last_name'] . $user_id;
            $user = User::create($input);

            Mail::to($user->email)->send(new WelcomeMail($user));

            $response = [
                'success' => true,
                'message' => "Registration Successful! Log in details has been Sent to $user->email",
                'details' => $user,
                'token' => $user->createToken('Personal Access Token')->accessToken,
            ];
            
            DB::commit();   

            return response()->json($response, 200);

        } catch (Exception $e) {
            report($e);
            
            DB::rollBack();

            $response['success'] = false;
            $response['message'] = "Oops! Something went wrong, Try Again!";
    
            return response()->json($response, 422);
        }
    }

    /**
     * Login api
     *
     * @return \Illuminate\Http\Response
     */
    public function login(Request $request) {

        $validator = Validator::make($request->all(), [
            'user_id' => 'required|max:255',
            'password' => 'required',
        ]);

        if($validator->fails()){
            $response = [
                'success' => false,
                'messsage' => $validator->errors(),
            ];
            return response()->json($response, 422); 
        }

        $credentials = request(['user_id', 'password']);

        if(!Auth::attempt($credentials)){
            $response['message'] = "Incorrect User ID or Password!";
            return response()->json($response, 401);
        }

        $user = $request->user();
        $token = $user->createToken('Personal Access Token')->accessToken;

        if($user->email_verified_at == null){
            $response['notice'] =  "You are still using default password... Please Update your password";
        }

        $response = [
            'success' => true,
            'message' => "Welcome Back $user->first_name",
            'token' => $token,
            'token_type' => 'Bearer'
        ];
        
        return response()->json($response, 201);

    }
}