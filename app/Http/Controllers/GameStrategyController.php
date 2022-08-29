<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\GameStrategy;

class GameStrategyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $gamestrategies = GameStrategy::paginate();
        return view('gamestrategies.index')->with(compact('gamestrategies'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('gamestrategies.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
            $gamestrategy = new GameStrategy;
        $gamestrategy -> fill($request->all());
        $gamestrategy -> save();
        return redirect()->route('gametitles.edit',$gamestrategy -> id);
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
        $gamestrategy = GameStrategy::find($id);
        return view('gamestrategy.edit')->with(compact('gamestrategy'));
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
        $post = GameStrategy::find($id);
        $post -> fill($request->all());
        $post -> save();
        return redirect()->route('gamestrategy.edit',$id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         $gamestrategy = GameStrategy::find($id);
        $gamestrategy->delete();
        return redirect()->route('gamestrategy.index');
    }
}
