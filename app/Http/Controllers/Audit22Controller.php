<?php

namespace App\Http\Controllers;

use App\audit22;
use Illuminate\Http\Request;

class Audit22Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    $permission = audit22::all();
    return view('audit22.index', ['archivos'=>$permission]);
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
     * @param  \App\audit22  $audit22
     * @return \Illuminate\Http\Response
     */
    public function show(audit22 $audit22)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\audit22  $audit22
     * @return \Illuminate\Http\Response
     */
    public function edit(audit22 $audit22)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\audit22  $audit22
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, audit22 $audit22)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\audit22  $audit22
     * @return \Illuminate\Http\Response
     */
    public function destroy(audit22 $audit22)
    {
        //
    }
}
