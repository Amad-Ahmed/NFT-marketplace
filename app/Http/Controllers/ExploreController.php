<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\collections;

class ExploreController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $coll = collections::all();
        $trending = collections::all()->sortByDesc('Likes');
        $top = collections::all()->sortByDesc('Volume');
        $art = collections::all()->where('Category', 'Art');
        $collectibles = collections::all()->where('Category', 'Collectibles');
        $domains = collections::all()->where('Category', 'Domain Names');
        $music = collections::all()->where('Category', 'Music');
        $photography = collections::all()->where('Category', 'Photography');
        $sports = collections::all()->where('Category', 'Sports');
        $trading = collections::all()->where('Category', 'Trading');
        $utility = collections::all()->where('Category', 'Utility');
        $virtual = collections::all()->where('Category', 'Virtual');
        $count=0;
        return view('explore', compact('count','coll','trending','top','art','collectibles','domains','music','photography','sports','trading','utility','virtual')); 
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
