<?php

use Illuminate\Database\Seeder;

class AnswerTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('answer')->insert([
            [
                'question_id' => '1',
                'answer' => 'Hypertext Preprocessor',
                'is_correct' => '1'
            ],

            [
                'question_id' => '1',
                'answer' => 'Personal Home Page',
                'is_correct' => '0'
            ],
        
            [
                'question_id' => '1',
                'answer' => 'Personal Hypertext Preprocessor',
                'is_correct' => '0'
            ],

            [
                'question_id' => '2',
                'answer' => 'shake',
                'is_correct' => '0',
            ],

            [
                'question_id' => '2',
                'answer' => 'elephant',
                'is_correct' => '1',
            ],

            [
                'question_id' => '2',
                'answer' => 'minion',
                'is_correct' => '0',
            ],

            [
                'question_id' => '3',
                'answer' => '6',
                'is_correct' => '0',
            ],

            [
                'question_id' => '3',
                'answer' => '8',
                'is_correct' => '1',
            ],

            [
                'question_id' => '3',
                'answer' => '10',
                'is_correct' => '0',
            ],

            [
                'question_id' => '4',
                'answer' => 'yes',
                'is_correct' => '0',
            ],

            [
                'question_id' => '4',
                'answer' => 'no',
                'is_correct' => '0',
            ],   

            [
                'question_id' => '4',
                'answer' => 'not nesessary',
                'is_correct' => '1',
            ],

            [
                'question_id' => '5',
                'answer' => '0, 1, 1, 2, 3, 5, 8, 13,..',
                'is_correct' => '1',
            ],

            [
                'question_id' => '5',
                'answer' => '1, 2, 2, 4, 8, 32,..',
                'is_correct' => '0',
            ],

            [
                'question_id' => '5',
                'answer' => '1, 3, 5, 7, 9, 11, 13,..',
                'is_correct' => '0',
            ],

            [
                'question_id' => '6',
                'answer' => 'yes',
                'is_correct' => '0',
            ],

            [
                'question_id' => '6',
                'answer' => 'no',
                'is_correct' => '1',
            ],

            [
                'question_id' => '6',
                'answer' => 'maybe..',
                'is_correct' => '0',
            ],

            [
                'question_id' => '7',
                'answer' => '103.5',
                'is_correct' => '1',
            ],

            [
                'question_id' => '7',
                'answer' => '5*20.7',
                'is_correct' => '0',
            ],

            [
                'question_id' => '7',
                'answer' => 'nothing',
                'is_correct' => '0',
            ],

            [
                'question_id' => '8',
                'answer' => '103.5',
                'is_correct' => '0',
            ],

            [
                'question_id' => '8',
                'answer' => '5*20.7',
                'is_correct' => '1',
            ],

            [
                'question_id' => '8',
                'answer' => 'nothing',
                'is_correct' => '0',
            ],

            [
                'question_id' => '9',
                'answer' => 'SELECT * FROM table_name',
                'is_correct' => '1',
            ],

            [
                'question_id' => '9',
                'answer' => 'SELECT * FROM table',
                'is_correct' => '0',
            ],

            [
                'question_id' => '9',
                'answer' => 'SELECT FROM table_name',
                'is_correct' => '0',
            ],

            [
                'question_id' => '10',
                'answer' => 'ADD',
                'is_correct' => '0',
            ],

            [
                'question_id' => '10',
                'answer' => 'INSERT INTO',
                'is_correct' => '1',
            ],

            [
                'question_id' => '10',
                'answer' => 'SELECT',
                'is_correct' => '0',
            ]    
        ]);
    }
}
