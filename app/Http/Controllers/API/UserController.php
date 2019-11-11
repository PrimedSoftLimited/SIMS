<?php


namespace App\Http\Controllers\API;

use App\User;
use Validator;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Mail\ConfirmationMail;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Hash;
use App\Notifications\PasswordResetSuccess;

class UserController extends BaseController
{
     /**
     * Get the authenticated User
     *
     * @return [json] user object
     */
    public function show(Request $request)
    {
        $response['success'] = true;
        $response['details'] = $request->user();

        return response()->json($response, 200);
    }  

    /**
     * Logout user (Revoke the token)
     *
     * @return [string] message
     */
    public function logout(Request $request)
    {
        $request->user()->token()->revoke();

        $message['success'] = true;
        $message['status'] = "Successfully Logged Out!";

        return response()->json($message, 200);
    }

    /**
     * Update user default password
     *
     * @return [string] message
     */
    public function updatePassword(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'current_password' => 'required',
        	'password' => 'required|confirmed|different:current_password|min:8',
        ]);

        if($validator->fails()){
            $response = [
                'success' => false,
                'Validation Error' => $validator->errors(),
            ];
            return response()->json($response, 401); 
        }

        $user = Auth::user();

        if(!Hash::check($request->current_password, $user->password)) {
            
            $response["success"] = False;
            $response['message'] = "Current Password does not match!";
    
            return response()->json($response, 422);
        }
        DB::beginTransaction();

        try {
           
            $user->password = Hash::make($request->input('password'));
            $user->email_verified_at = Carbon::now();
            $user->default_password = null;
            $user->save();

            $user->notify(new PasswordResetSuccess($user));
            
            DB::commit();   

            $response = [
                'Success' => true,
                'Message' => "Password Updated Succesfully!",
            ];
            return response()->json($response, 200);


        } catch (Exception $e) {
            report($e);
            
            DB::rollBack();

            $response = [
                'Success' => false,
                'Message' => "Oops! Something went wrong, Try Again!",
            ];
            return response()->json($response, 422);
        }

    }
}