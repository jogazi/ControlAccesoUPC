<?php

namespace App\Http\Controllers;

use App\audit15;
use Illuminate\Http\Request;

class Audit15Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    $permission = audit15::all();
    return view('audit15.index', ['archivos'=>$permission]);
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
     * @param  \App\audit15  $audit15
     * @return \Illuminate\Http\Response
     */
    public function show(audit15 $audit15)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\audit15  $audit15
     * @return \Illuminate\Http\Response
     */
    public function edit(audit15 $audit15)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\audit15  $audit15
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, audit15 $audit15)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\audit15  $audit15
     * @return \Illuminate\Http\Response
     */
    public function destroy(audit15 $audit15)
    {
        //
    }
}
