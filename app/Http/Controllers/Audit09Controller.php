<?php

namespace App\Http\Controllers;

use App\audit09;
use Illuminate\Http\Request;

class Audit09Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    $permission = audit09::all();
    return view('audit09.index', ['archivos'=>$permission]);
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
     * @param  \App\audit09  $audit09
     * @return \Illuminate\Http\Response
     */
    public function show(audit09 $audit09)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\audit09  $audit09
     * @return \Illuminate\Http\Response
     */
    public function edit(audit09 $audit09)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\audit09  $audit09
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, audit09 $audit09)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\audit09  $audit09
     * @return \Illuminate\Http\Response
     */
    public function destroy(audit09 $audit09)
    {
        //
    }
}
