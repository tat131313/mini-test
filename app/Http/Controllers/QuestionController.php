<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Question;
use App\Answer;

class QuestionController extends Controller
{
    //public function showTest() {
       /*$task = Question::leftJoin('answers', 'questions.id', '=', 'answers.question_id')
                ->select('questions.question', 'answers.answer', 'questions.id')
                //->groupBy('questions.id')
                ->get();*/

        //$answers = DB::table('answer')->select('answer')->get();
        //var_dump($task);
        
        
        /*$task = array();
        for ($i=1; $i<=10; $i++) {
            $task[$i] = Question::where('questions.id', '=', $i)
                ->leftJoin('answers', 'questions.id', '=', 'answers.question_id')
                ->select('answers.answer')
                //->groupBy('questions.id')
                ->get();
        }*/


        /*foreach ($task as $ques){
            dump($ques->id);
        }*/

        //dump($task);
        
        //var_dump($answers);
        //echo $questions[0];
        //return view('test', ['questions' => $questions], ['answer' => $answers]);
    //}

    public function showTest() {
        $id = 1;
        $tasks = array();

        while($id<11) {
            $tasks[$id] = Question::leftJoin('answers', 'questions.id', '=', 'answers.question_id')
                                    ->select('questions.question', 'answers.answer', 'questions.id')
                                    ->where('questions.id', '=', $id)
                                    ->where('answers.question_id', '=', $id)
                                    ->get();
            $id++;
        }
        dump($tasks);
        return view('test', ['tasks' => $tasks]);
    }
}
