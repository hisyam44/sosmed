<?php

use Illuminate\Database\Seeder;

use App\User;
use App\Stat;
use App\Comment;
use App\Like;


class StatSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new User();
        $user->name = 'hisyam';
        $user->email = 'hisyam@example.com';
        //$user->photo = 'southern_miss_logo.0.0.jpeg';
        $user->password = bcrypt('admin1');
        $user->save();

        $stat = Stat::create(['user_id'=>'1','content'=>'Lorem Ipsum','published_at'=>Carbon\Carbon::now()]);

        $like = Like::create(['stat_id'=>'1','count'=>45]);
     
        $comment = Comment::create(['stat_id'=>1,'user_id'=>1,'content'=>'Lorem Ipsum','published_at'=>Carbon\Carbon::now()]);
    }
}
