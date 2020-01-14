<?php


namespace App\Http\Controllers\API;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends BaseController
{
     /**
     * Get all Users
     *
     * @return [json] user object
     */
    public function index(){
        $users = User::where('type', 'normal')->get();

        if(Auth::user()->type == 'admin'){
            $response = [
                'success' => true,
                'details' => $users,
            ];
            return response()->json($response, 200);
        }
        $response = [
            'success' => false,
            'details' => 'Unauthorized',
        ];
        return response()->json($response, 401);
    }

    /**
     * Get all Users who have paid
     *
     * @return [json] user object
     */
    public function payment(){
        $users = User::where('type', 'normal')->where('transactionRef', '!=', 'null')->get();

        if(Auth::user()->type == 'admin'){
            $response = [
                'success' => true,
                'details' => $users,
            ];
            return response()->json($response, 200);
        }
        $response = [
            'success' => false,
            'details' => 'Unauthorized',
        ];
        return response()->json($response, 401);
    }


    


    // $user = Auth::user();
    

    // $exam = Exam::where('id', $exam_id)
    // ->with(['questions' => function($query1){
    //     $query1->with(['instructions' => function($query2){
    //         $query2->with('options');
    //     }]);
    // }])    
    // ->get();

}