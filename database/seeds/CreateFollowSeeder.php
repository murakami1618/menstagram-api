<?php

use Illuminate\Database\Seeder;

use App\Models\Follow;
use App\Models\User;

class CreateFollowSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Follow::truncate();
        $users = User::all();
        foreach($users as $user){
            Follow::create([
                'user_id'=> $user->id,
                'target_user_id'=> 1
            ]);
        }
    }
}
