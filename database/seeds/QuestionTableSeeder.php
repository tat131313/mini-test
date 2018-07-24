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
        DB::table('questions')->insert(['question'=>'PHP is ...']);
        DB::table('questions')->insert(['question'=>'PHP is denoted as ...']);
        DB::table('questions')->insert(['question'=>'How many types of data exist in PHP?']);
        DB::table('questions')->insert(['question'=>'Do you have write "?>" at the end of script?']);
        DB::table('questions')->insert(['question'=>'Which of the sequences is Fibonacci numbers?']);
        DB::table('questions')->insert(['question'=>'Does PHP support multiple inheritance?']);
        DB::table('questions')->insert(['question'=>'What is result: echo 5*20.7?']);
        DB::table('questions')->insert(['question'=>'What is result: echo \'5*20.7?\'']);
        DB::table('questions')->insert(['question'=>'How to display all fields from table "table_name"?']);
        DB::table('questions')->insert(['question'=>'How to add new string to table with mySQL?']);
    }
}
