<?php

namespace App\Http\Controllers;

use App\audit13;
use Illuminate\Http\Request;

class Audit13Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    $permission = audit13::all();
    return view('audit13.index', ['archivos'=>$permission]);
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
     * @param  \App\audit13  $audit13
     * @return \Illuminate\Http\Response
     */
    public function show(audit13 $audit13)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\audit13  $audit13
     * @return \Illuminate\Http\Response
     */
    public function edit(audit13 $audit13)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\audit13  $audit13
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, audit13 $audit13)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\audit13  $audit13
     * @return \Illuminate\Http\Response
     */
    public function destroy(audit13 $audit13)
    {
        //
    }
}
