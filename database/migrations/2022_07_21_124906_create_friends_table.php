<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFriendsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('friends', function (Blueprint $table) {
        //   ゲームID
            $table->integer('id');
            $table->integer('user_id');
            // ゲームタイトル
            $table->string('game_title');
            // ユーザ投稿コメント
            $table->string('message');
            // 日付
            $table->timestamp('mark_dt')->nullable();
            // 目的
            $table->string('purpose');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('friends');
    }
}
