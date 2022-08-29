<?php

use Illuminate\Database\Seeder;
use App\GameStrategy;

class GameStrategiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        GameStrategy::create(['user_id'=>1,'message'=>'message1','game_title'=>'game1']);
        GameStrategy::create(['user_id'=>2,'message'=>'message2','game_title'=>'game2']);
    }
}
