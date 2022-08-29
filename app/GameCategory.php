<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class GameCategory extends Model
{
    protected $fillable =[
        "categories_name",
        "title"
        ];
    public function game_titles() {
        return $this -> belongsToMany('App\GameTitle');
    }
    
     public function friends() {
        return $this -> belongsToMany('App\Friends');
    }
}
