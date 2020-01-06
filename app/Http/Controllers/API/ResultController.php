<?php

namespace App\Http\Controllers\API;

use App\User;
use App\Mark;
use App\Answer;
use DB;
use App\Question;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class ResultController extends Controller
{
    /**
     * View questions and options.
     *
     * @return Response
     */
    public function index($examId)
    {
        $mark = Mark::where('exam_id', $examId)
                    ->where('user_id', Auth::user()->id)
                    ->exists();

        $correct_option_count = Question::select('correct_option_count', 'id');
        // return response()->json($correct_option_count, 200);

            if ($mark){
                // $result = DB::table("marks")
                //                 ->select(
                //                     'question_id.*', '==', $correct_option_count
                //                 )
                //                 ->groupBy('question_id')
                //                 ->get()
                $result = Mark::select('question_id', DB::raw('count(*) as option_count'))
                                ->where('exam_id', $examId)
                                ->where('user_id', Auth::user()->id)
                                // ->leftJoin('exams', 'marks.exam_id', 'exams.id')
                                // ->leftJoin('questions', 'marks.question_id', 'questions.id')
                                // ->select('marks.answer', 'exams.exam_name')

                                ->groupBy('question_id')
                                ->get();
                // $countResults = $result->count();
                $response = [
                    'success' => true,
                    'detail' => $result,
                    // 'correct_option_count' =>$correct_option_count
                    // 'detail' => $countResults
                ]; 
                    return response()->json($response, 200);
            } $response = [
                'success' => false,
                'message' => "You have not attempted this exam"
            ]; 
                return response()->json($response, 401);
    }
    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    // public function create(Request $request, $question_id)
    // {
    //     $question = Question::where('question_id', $question->id)->exists();

    //     $this->validateAnswer($request);
    //     if($question){
    //         try{
    //             $mark = new Mark;
    //             $mark->user_id = Auth::user()->id;
    //             $mark->answer_id = $request->input('answer_id');
    //             $mark->question_id = $question->id;
    //             $mark->save();
    
    //             return response()->json('WELLDONE', 200);
    
    //         }catch (\Exception $e) {
    //             return response()->json(['message'=> "Opps! Something went wrong!"], 400);
    //         }
    //     } return response()->json(['message'=> "Opps! Something thing wrong!"], 404);
        
    // }

}
