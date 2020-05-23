<?php

namespace App\Http\Controllers;

use App\audit12;
use Illuminate\Http\Request;
use Alert;
use Auth;

class Audit12Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $roles = audit12::where("state","=","A")->paginate(4);
        return view('audit12.index', compact('roles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $permissions = audit12::get();
        return view('audit12.create', compact('permissions'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $name = $request["name"];
        $audit = new Controller;
        $audit->audit("C", "Audit12", Auth::user()->id, "Create new movie $name");
        $role = audit12::create($request->all());

        Alert::success('Success', 'Movie Successfully Create');
        $roles = audit12::where("state","=","A")->paginate(4);
        //return view('roles.index', compact('roles'));
        return redirect()->route('audit12.index', $roles);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\audit12  $audit12
     * @return \Illuminate\Http\Response
     */
    public function show(audit12 $audit12)
    {
        $audit = new Controller;
        $audit->audit("R", "Audit12", Auth::user()->id, "Show Movie $audit12->name");
        return view('audit12.show', compact('audit12'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\audit12  $audit12
     * @return \Illuminate\Http\Response
     */
    public function edit($films)
    {
        $role = audit12::find($films);
        return view('audit12.edit', compact('role'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\audit12  $audit12
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $name = $request["name"];
        $audit = new Controller;
        
        $role = audit12::find($id);
        $audit->audit("U", "Audit12", Auth::user()->id, "Update movie $role->name to $name");
        $role->update($request->all());

        Alert::success('Success', 'Movie Successfully Modified');
        return redirect()->route('audit12.edit', $role->idfilms)
            ->with('info', 'Movie guardado con éxito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\audit12  $audit12
     * @return \Illuminate\Http\Response
     */
    public function destroy(audit12 $audit12)
    {
        $audit = new Controller;
        $audit->audit("D", "Audit12", Auth::user()->id, "Destroy movie $audit12->name");
        $audit12->state = "R";
        $audit12->save();
        Alert::success('Success', 'Movie Successfully Deleted');
        return back();
    }

    function imprimir() {
        $audit = new Controller;
        $audit->audit("R", "Audit12", Auth::user()->id, "Report of movies");
        $roles = audit12::all()->where("state","=","A");
        $pdf = \PDF::loadView('audit12.pdf', compact('roles'));
        return $pdf->download('Movies.pdf');
    }
}
