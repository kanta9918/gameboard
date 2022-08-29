<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Friends extends Model
{
     protected $fillable =[
        "user_id",
        "game_title",
        "message",
        "purpose"
        ];
     public function game_titles() {
        return $this -> belongsToMany('App\GameTitle');
    }
    
     public function game_categories() {
        return $this -> belongsToMany('App\GameCategory');
    }
     public function user() {
        return $this -> belongsTo('App\User');
    }
}
