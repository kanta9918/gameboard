<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Friends;
use App\GameTitles;
class FriendsController extends Controller
{
    
    private function get_all_game_titles(){
        return GameTitle::pluck('title','id');
        
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $friends=Friends:paginate();
        return view('friends.index')->with(compact('friends'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $game_all_titles=$this->get_all_game_titles();
        return view('friends.create')->with(compact('game_all_titles'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $friend = new Friend;
        $friend -> fill($request->all());
        $friend->save();
        $friend -> game_titles()->sync($request -> game_title_id);
        return redirect()->route('friend.edit',$friend->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $friend = Friend::find($id);
        $game_all_titles = $this -> get_all_game_titles();
        $game_title_ids = [];
        foreach($friend -> game_titles as $game_title){
            $game_title_ids[] = $game_title -> id ;
        }
        return view('friends.edit')->with(compact('friend','game_all_titles','game_title_ids'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $post =Friend::find($id);
        $post->fill($request->all());
        $post->save();
        $post -> game_titles() -> sync($request -> game_title_id) ;
        return redirect()->route('friends.edit',$id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $friend = Friend::find($id);
        $friend->delete();
        return redirect()->route('friends.index');
    }
}
