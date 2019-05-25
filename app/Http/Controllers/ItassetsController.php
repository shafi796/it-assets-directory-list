<?php

namespace App\Http\Controllers;

use App\Itassets;
use Illuminate\Http\Request;

class ItassetsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $itassets  = Itassets::latest()->paginate(5);
        return view('itassets.index',compact('itassets'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
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
     * @param  \App\Itassets  $itassets
     * @return \Illuminate\Http\Response
     */
    public function show(Itassets $itassets)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Itassets  $itassets
     * @return \Illuminate\Http\Response
     */
    public function edit(Itassets $itassets)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Itassets  $itassets
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Itassets $itassets)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Itassets  $itassets
     * @return \Illuminate\Http\Response
     */
    public function destroy(Itassets $itassets)
    {
        //
    }
}
