<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class GameStrategy extends Model
{
  protected $fillable =[
        "user_id",
        "message",
        "game_title"
        ];
     public function game_titles() {
        return $this -> belongsToMany('App\GameTitle');
    }
    
     public function game_category() {
        return $this -> belongsToMany('App\GameCategory');
    }
    
     public function user() {
        return $this -> belongsTo('App\User');
    }
}
