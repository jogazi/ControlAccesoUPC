<?php

namespace App\Http\Controllers;

use App\audit12;
use Illuminate\Http\Request;

class Audit12Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    $permission = audit12::all();
    return view('audit12.index', ['archivos'=>$permission]);
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
     * @param  \App\audit12  $audit12
     * @return \Illuminate\Http\Response
     */
    public function show(audit12 $audit12)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\audit12  $audit12
     * @return \Illuminate\Http\Response
     */
    public function edit(audit12 $audit12)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\audit12  $audit12
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, audit12 $audit12)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\audit12  $audit12
     * @return \Illuminate\Http\Response
     */
    public function destroy(audit12 $audit12)
    {
        //
    }
}
