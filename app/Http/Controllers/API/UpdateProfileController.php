<?php

namespace App\Http\Controllers\API;

use Hash;
use App\User;
use Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UpdateProfileController extends BaseController
{
    /**
     * Register api
     *
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $user = Auth::user();

        $this->validateRequest($request);

        $dob = $request->get('dob');
        $pob = $request->get('pob');
        $lga = $request->get('lga');
        $state = $request->get('state');
        $phone = $request->get('phone');
        $address = $request->get('address');
        $last_name = $request->get('last_name');
        $first_name = $request->get('first_name');
        $occupation = $request->get('occupation');
        $marital_status = $request->get('marital_status');

        /* Ensure the field is not emplty! */

        try {
            if( $dob != '' ){
                $user->dob = $dob;
            }
            if( $pob != '' ){
                $user->pob = $pob;
            }
            if( $lga != '' ){
                $user->lga = $lga;
            }
            if( $state != '' ){
                $user->state = $state;
            }
            if( $phone != '' ){
                $user->phone = $phone;
            }
            if( $address != '' ){
                $user->address = $address;
            }
            if( $last_name != '' ){
                $user->last_name = $last_name;
            }
            if( $first_name != '' ){
                $user->first_name = $first_name;
            }
            if( $occupation != '' ){
                $user->occupation = $occupation;
            }
            if( $marital_status != '' ){
                $user->marital_status = $marital_status;
            }

            $user->save();

            $response = [
                'success' => true,
                'message' => "Profile Updated Successfully",
                'details' => $user,
            ];
            
            return response()->json($response, 201);
            
        } catch (Exception $e) {
            report($e);
            
            $response['success'] = false;
            $response['message'] = "Oops! Something went wrong, Try Again!";
    
            return response()->json($response, 422);
        }
    }

     /**
     * Validation rules
     *
     * @return \Illuminate\Http\Response
     */
    public function validateRequest($request)
    {
       $rules = [
            'dob' => 'sometimes|date',
            'lga' => 'sometimes|string',
            'phone' => 'sometimes|phone',
            'state' => 'sometimes|string',
            'last_name' => 'sometimes|string',
            'first_name' => 'sometimes|string',
            'address' => 'sometimes|string|min:5',
            'marital_status' => 'sometimes|string',
            'occupation' => 'sometimes|string|min:5',
        ];

        $this->validate($request, $rules);
    }

}