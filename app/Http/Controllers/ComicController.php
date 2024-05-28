<?php

namespace App\Http\Controllers;

use App\Models\Comic;
use Illuminate\Http\Request;

class ComicController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * 
     */
    public function index()
    {
        $comics=Comic::all();
        return view('comics.index',compact('comics'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * 
     */
    public function create()
    {
        return view('comics.create');
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * 
     */
    public function store(Request $request)
    {
        $user_form = $request->all();
        $new_item = new Comic();
        $new_item->title = $user_form['title'];
        $new_item->description = $user_form['description'];
        $new_item->thumb = $user_form['thumb'];
        $new_item->price = $user_form['price'];
        $new_item->series = $user_form['series'];
        $new_item->sale_date = $user_form['sale_date'];
        $new_item->type = $user_form['type'];
        $new_item->save();
        return redirect()->route('comics.index')->with('done', 'Item deleted!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Comic  $comic
     * 
     */
    public function show(Comic $comic)
    {
        return view('comics.show', compact('comic'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Comic  $comic
     * 
     */
    public function edit(Comic $comic)
    {
        return view('comics.edit', compact('comic'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Comic $comic)
    {
        $user_form = $request->all();
        $edit_item = Comic::find($comic->id);
        $edit_item->title = $user_form['title'];
        $edit_item->description = $user_form['description'];
        $edit_item->thumb = $user_form['thumb'];
        $edit_item->price = $user_form['price'];
        $edit_item->series = $user_form['series'];
        $edit_item->sale_date = $user_form['sale_date'];
        $edit_item->type = $user_form['type'];
        $edit_item->update();
        return redirect()->route('comics.show', $comic->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Comic  $comic
     * 
     */
    public function destroy(Comic $comic)
    {
        $comic->delete();
        return redirect()->route('comics.index')->with('alert', 'Item deleted!');
    }
}
