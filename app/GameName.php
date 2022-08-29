<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class GameName extends Model
{
    protected $fillable = [
      "game_title",
      "categoreis"
     ];
     public function game_categories() {
        return $this -> belongsToMany('App\GameCategory');
    }
    
     public function friends() {
        return $this -> belongsToMany('App\Friends');
    }
    
     public function game_strategies() {
        return $this -> belongsToMany('App\GameStrategy');
    }
}
