<?php

namespace App\Http\Controllers;

use App\audit16;
use Illuminate\Http\Request;

class Audit16Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    $permission = audit16::all();
    return view('audit16.index', ['archivos'=>$permission]);
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
     * @param  \App\audit16  $audit16
     * @return \Illuminate\Http\Response
     */
    public function show(audit16 $audit16)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\audit16  $audit16
     * @return \Illuminate\Http\Response
     */
    public function edit(audit16 $audit16)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\audit16  $audit16
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, audit16 $audit16)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\audit16  $audit16
     * @return \Illuminate\Http\Response
     */
    public function destroy(audit16 $audit16)
    {
        //
    }
}
