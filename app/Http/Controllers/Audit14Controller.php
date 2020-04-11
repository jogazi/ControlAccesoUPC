<?php

namespace App\Http\Controllers;

use App\audit14;
use Illuminate\Http\Request;

class Audit14Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    $permission = audit14::all();
    return view('audit14.index', ['archivos'=>$permission]);
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
     * @param  \App\audit14  $audit14
     * @return \Illuminate\Http\Response
     */
    public function show(audit14 $audit14)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\audit14  $audit14
     * @return \Illuminate\Http\Response
     */
    public function edit(audit14 $audit14)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\audit14  $audit14
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, audit14 $audit14)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\audit14  $audit14
     * @return \Illuminate\Http\Response
     */
    public function destroy(audit14 $audit14)
    {
        //
    }
}
