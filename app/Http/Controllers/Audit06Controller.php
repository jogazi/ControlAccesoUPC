<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Caffeinated\Shinobi\Models\Role;

class Audit06Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    $permission = Role::all();
    return view('audit06.index', ['archivos'=>$permission]);
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
     * @param  \App\audit06  $audit06
     * @return \Illuminate\Http\Response
     */
    public function show(audit06 $audit06)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\audit06  $audit06
     * @return \Illuminate\Http\Response
     */
    public function edit(audit06 $audit06)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\audit06  $audit06
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, audit06 $audit06)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\audit06  $audit06
     * @return \Illuminate\Http\Response
     */
    public function destroy(audit06 $audit06)
    {
        //
    }
}
