<?php

use Illuminate\Database\Seeder;

class QuestionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('questions')->insert([
            ['question'=>'PHP is ...'],
            ['question'=>'PHP is denoted as ...'],
            ['question'=>'How many types of data exist in PHP?'],
            ['question'=>'Do you have write "?>" at the end of script?'],
            ['question'=>'Which of the sequences is Fibonacci numbers?'],
            ['question'=>'Does PHP support multiple inheritance?'],
            ['question'=>'What is result: echo 5*20.7?'],
            ['question'=>'What is result: echo \'5*20.7?\''],
            ['question'=>'How to display all fields from table "table_name"?'],
            ['question'=>'How to add new string to table with mySQL?']
        ]);
    }
}
