<?php

namespace App\Http\Controllers\API;

use App\User;
use App\Exam;
use App\Mark;
use Validator;
use App\Answer;
use App\Question;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class ExamsController extends Controller
{
    /**
     * View exams.
     *
     * @return Response
     */
    public function index()
    {
        $exam = Exam::get();
        return response()->json($exam, 200);
    }

    /**
     * View all questions of an exam 
     * alongside it's instructions and options.
     *
     * @return Response
     */
    public function show($exam_id)
    {
        $exam = Exam::where('id', $exam_id)
                    ->with(['questions' => function($query1){
                        $query1->with(['instructions' => function($query2){
                            $query2->with('options');
                        }]);
                    }])    
                    ->get();
        
        return response()->json($exam, 200);
    }

    /**
     * View one question and options.
     *
     * @return Response
     */
    public function viewOne($examId, $questionId)
    {
        // checks for correct exam id
        $exam = Exam::where('id', $examId)->first();
        if($exam){
            $question = Question::where('exam_id', $examId)
                    ->where('id', $questionId)
                    ->with(['instructions' => function($query){
                        $query->with('options');
                    }])
                    ->get();
            return response()->json($question, 200);

        } return response()->json(['message'=> "Opps! Something thing wrong!"], 404);
    }
    
    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function create(Request $request, $examId, $questionId, $optionId)
    {
        $validator = Validator::make($request->all(), [
            'answer' => 'required',
        ]);

        if($validator->fails()){
            $response = [
                'success' => false,
                'messsage' => $validator->errors(),
            ];
            return response()->json($response, 422); 
        }

        // checks if answer is correct
        $answer = Answer::where('answer_name', $request->input('answer'))
                        ->where('exam_id', $examId)
                        ->where('question_id', $questionId)
                        ->where('option_id', $optionId)
                        ->exists();
        if ($answer){
            $user = Auth::user();

            // checks if user has attempted the question before
            if(Mark::where('user_id', $user->id)
                        ->where('exam_id', $examId)
                        ->where('question_id', $questionId)
                        ->where('option_id', $optionId)
                        ->exists()){
                            $response = ['success' => false,
                                         'message' => "You've attempted this question already"]; 
                            return response()->json($response, 201);
                        }
                try {
                    // saves users mark for correct answer
                    $mark = new Mark;
                    $mark->answer = true;
                    $mark->user_id = $user->id;
                    $mark->exam_id = $examId;
                    $mark->question_id = $questionId;
                    $mark->option_id = $optionId;
                    $mark->save();
    
                    $response = [
                        'success' => true,
                        'message' => "Weldone",
                    ]; 
                    return response()->json($response, 201);
                }catch (\Exception $e) {
                    $response = ['success' => false, 'message' => "OOPS! Something went wrong!"]; 
                    return response()->json($response, 201);
                }
        }
            $mark = new Mark;
            $mark->answer = false;
            $mark->user_id = Auth::user()->id;
            $mark->exam_id = $examId;
            $mark->question_id = $questionId;
            $mark->option_id = $optionId;
            $mark->save();

            $response = [
                'success' => false,
                'message' => "Incorrect Answer!",
            ]; 
            return response()->json($response, 401); 
    }

    public function validateAnswer(Request $request){
		$rules = [
            'answer' => 'required',
        ];
		$this->validate($request, $rules);
    }

}
