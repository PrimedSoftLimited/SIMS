<?php

namespace App\Http\Controllers\API;

use App\User;
use App\Answer;
use App\Question;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class QuizController extends Controller
{
    /**
     * View questions and options.
     *
     * @return Response
     */
    public function index()
    {
        $question = Question::inRandomOrder()    
                    ->with('instructions')
                    ->with('answers')
                    ->paginate(1);
        
        return response()->json($question, 200);
    }
    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function create(Request $request, $question_id)
    {
        $question = Question::find($question_id);

        $this->validateAnswer($request);
        if($question){
            try{
                $mark = new Mark;
                $mark->user_id = Auth::user()->id;
                $mark->answer_id = $request->input('answer_id');
                $mark->save();
    
                return response()->json('WELLDONE', 200);
    
            }catch (\Exception $e) {
                return response()->json(['message'=> "Opps! Something went wrong!"], 400);
            }
        } return response()->json(['message'=> "Opps! Something thing wrong!"], 404);
        
    }

    public function validateAnswer(Request $request){
		$rules = [
            'answer_id' => 'required',
        ];
		$this->validate($request, $rules);
    }

}
