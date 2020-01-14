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

        // $correct_option_count = Question::select('correct_option_count', 'id');

            if ($mark){
                // select('answer', 
                //                     DB::raw("(SELECT (exams.exam_name) FROM exams
                //                                 WHERE marks.exam_id = exams.id) as exam"),
                //                     DB::raw("(SELECT (questions.correct_option_count) FROM questions
                //                                 WHERE marks.question_id = questions.id) as option_count")
                //                     )
                //                     ->

                $result = Mark::select('question_id', DB::raw('count(*) as question'))
                                    ->where('answer', '>=', 1)
                                    ->where('exam_id', $examId)
                                    ->where('user_id', Auth::user()->id)
                                  
                // $result = Mark::select('question_id', DB::raw('count(*) as option_count'))

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
}
