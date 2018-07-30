<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Question;
use App\Answer;

class QuestionController extends Controller
{
    public function showTest() {
       /*$task = Question::leftJoin('answers', 'questions.id', '=', 'answers.question_id')
                ->select('questions.question', 'answers.answer', 'questions.id')
                //->groupBy('questions.id')
                ->get();*/

        //$answers = DB::table('answer')->select('answer')->get();
        //var_dump($task);
        $task = array();
        for ($i=1; $i<=10; $i++) {
            $task[$i] = Question::where('questions.id', '=', $i)
                ->leftJoin('answers', 'questions.id', '=', 'answers.question_id')
                ->select('answers.answer')
                //->groupBy('questions.id')
                ->get();
        }
        /*foreach ($task as $ques){
            dump($ques->id);
        }*/

        dump($task);
        
        //var_dump($answers);
        //echo $questions[0];
        //return view('test', ['questions' => $questions], ['answer' => $answers]);
    }

    /*public function showTest($id = 1) {
        if($id<10) {
            $questions = DB::table('questions')
                            ->select('id', 'question')
                            ->where('id', $id)
                            ->get();
            $answers = DB::table('answer')
                ->select('question_id', 'answer')
                ->where('question_id', $id)
                ->get();
            //var_dump($questions);
            //var_dump($answers);
            return view('test', ['questions' => $questions], ['answer' => $answers]);
        }

        else {
            return redirect()->route('rating'); 
        }
    }*/
}
