<?php

namespace App\Http\Controllers\API;

use Hash;
use App\User;
use Validator;
use Carbon\Carbon;
use App\PasswordReset;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;
use App\Notifications\PasswordResetRequest;
use App\Notifications\PasswordResetSuccess;

class PasswordResetController extends BaseController
{
    /**
     * Create token password reset
     *
     * @param  [string] email
     * @return [string] message
     */
    public function create(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|string|email',
        ]);

        if($validator->fails()){
            $response["Validation Error."] = $validator->errors();
            return response()->json($response, 400);
        }

        $user = User::where('email', $request->email)->first();

        if (!$user) {
            return response()->json(['message' => 'User does not exist'], 404);
        }

        DB::beginTransaction();

        try {
            $passwordReset = PasswordReset::updateOrCreate(
                ['email' => $user->email],
                [
                    'email' => $user->email,
                    'token' => str_random(60)
                 ]
            );

            if ($user && $passwordReset)
            $user->notify(new PasswordResetRequest($passwordReset->token));

            DB::commit();   

            $response["success"] = True;
            $response['message'] = "Password Reset Mail Has Been Sent to $user->email";

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
     * Find token password reset
     *
     * @param  [string] $token
     * @return [string] message
     * @return [json] passwordReset object
     */
    public function find($token)
    {
        $passwordReset = PasswordReset::where('token', $token)->first();

        if (!$passwordReset)
            return response()->json(['message' => 'This password reset token is invalid.'], 404);

        if (Carbon::parse($passwordReset->updated_at)->addMinutes(720)->isPast()) {
            $passwordReset->delete();
            
            return response()->json(['message' => 'This password reset token has expired.'], 404);
            }

        return response()->json($passwordReset, 201);
    }
     /**
     * Reset password
     *
     * @param  [string] email
     * @param  [string] password
     * @param  [string] password_confirmation
     * @param  [string] token
     * @return [string] message
     * @return [json] user object
     */
    public function reset(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required',
            'password' => 'required|confirmed|min:8',
            'token' => 'required|string'            
        ]);

        if($validator->fails()){
            $response = [
                'success' => false,
                'Validation Error' => $validator->errors(),
            ];
            return response()->json($response, 401); 
        }

        $passwordReset = PasswordReset::where([
            ['token', $request->token],
            ['email', $request->email]
        ])->first();
        
        if (!$passwordReset){
            return response()->json(['message' => 'This password reset token is invalid.'], 404);
        }
        $user = User::where('email', $passwordReset->email)->first();

        if (!$user) {
            return response()->json(['message' => 'We cant find a user with the e-mail address.'], 404);
        }

        DB::beginTransaction();

        try {
            $user->password = Hash::make($request->password);
            $user->email_verified_at = Carbon::now();
            $user->default_password = null;
            $user->save();
            $passwordReset->delete();
        
            $user->notify(new PasswordResetSuccess($passwordReset));

            DB::commit();   

            $response['success'] =  True;
            $response['message'] = "Password Changed Successfully";
        
            return response()->json($response, 200);
        } catch (Exception $e) {
            report($e);
            
            DB::rollBack();
        
            $response['success'] = false;
            $response['message'] = "Oops! Something went wrong, Try Again!";
        
            return response()->json($response, 422);
        }
    }
}