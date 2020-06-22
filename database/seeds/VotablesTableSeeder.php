<?php

use App\Answer;
use App\Question;
use App\User;
use Illuminate\Database\Seeder;

class VotablesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('votables')->delete();

        $users = User::all();
        $numberOfUsers = $users->count();
        $votes= [-1,1];

        foreach(Question::all() as $question){
            for($i = 0; $i < rand(1, $numberOfUsers); $i++){
                $user = $users[$i];
                $user->voteQuestion($question,$votes[rand(0,1)]);
            }
        }

        foreach(Answer::all() as $answer){
            for($i = 0; $i < rand(1, $numberOfUsers); $i++){
                $user = $users[$i];
                $user->voteAnswer($answer,$votes[rand(0,1)]);
            }
        }


    }
}
