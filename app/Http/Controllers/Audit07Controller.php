<?php

namespace App\Http\Controllers;

use App\audit07;
use Illuminate\Http\Request;
use Alert;
use Auth;

class Audit07Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $permission = audit07::paginate(4);
        return view('audit07.index', compact('permission'));
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
     * @param  \App\audit07  $audit07
     * @return \Illuminate\Http\Response
     */
    public function show(audit07 $audit07)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\audit07  $audit07
     * @return \Illuminate\Http\Response
     */
    public function edit(audit07 $audit07)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\audit07  $audit07
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, audit07 $audit07)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\audit07  $audit07
     * @return \Illuminate\Http\Response
     */
    public function destroy(audit07 $audit07)
    {
        //
    }

    function imprimir() {
        $audit07 = audit07::all();

        $pdf = \PDF::loadView('audit07.pdf', compact('audit07'));
        return $pdf->download('Log-SYS.pdf');
    }
}
