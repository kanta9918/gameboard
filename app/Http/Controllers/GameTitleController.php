<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\GameTitle;

class GameTitleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $gametitles = GameTitle::paginate();
        return view('gametitles.index',compact('gametitles'));
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('gametitles.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         $gametitle = new GameTitle;
        $gametitle -> fill($request->all());
        $gametitle->save();
        return redirect()->route('gametitles.edit');
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
        $gametitle = GameTitle::find($id);
        return view('gametitles.edit')->with(compact('gametitle'));
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
         $post = GameTitle::find($id);
        $post->fill($request->all());
        $post->save();
        return redirect()->route('gametitles.edit');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $gametitle = GameTitle::find($id);
        $gametitle->delete();
        return redirect()->route('gametitles.index');
    }
}
