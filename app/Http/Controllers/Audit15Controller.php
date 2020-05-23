<?php

namespace App\Http\Controllers;

use App\audit15;
use Illuminate\Http\Request;
use Alert;
use Auth;

class Audit15Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $roles = audit15::where("state","=","A")->paginate(4);
        return view('audit15.index', compact('roles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $permissions = audit15::get();
        return view('audit15.create', compact('permissions'));
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
        $audit->audit("C", "Audit15", Auth::user()->id, "Create new room $name");
        $role = audit15::create($request->all());

        Alert::success('Success', 'Room Successfully Create');
        $roles = audit15::where("state","=","A")->paginate(4);
        //return view('roles.index', compact('roles'));
        return redirect()->route('audit15.index', $roles);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\audit15  $audit15
     * @return \Illuminate\Http\Response
     */
    public function show(audit15 $audit15)
    {
        $audit = new Controller;
        $audit->audit("R", "Audit15", Auth::user()->id, "Show Movie $audit15->name");
        return view('audit15.show', compact('audit15'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\audit15  $audit15
     * @return \Illuminate\Http\Response
     */
    public function edit($rooms)
    {
        $role = audit15::find($rooms);
        return view('audit15.edit', compact('role'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\audit15  $audit15
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $name = $request["name"];
        $audit = new Controller;

        $role = audit15::find($id);
        $audit->audit("U", "Audit15", Auth::user()->id, "Update room $role->name to $name");
        $role->update($request->all());

        Alert::success('Success', 'Room Successfully Modified');
        return redirect()->route('audit15.edit', $role->idrooms)
            ->with('info', 'Movie guardado con éxito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\audit15  $audit15
     * @return \Illuminate\Http\Response
     */
    public function destroy(audit15 $audit15)
    {
        $audit = new Controller;
        $audit->audit("D", "Audit15", Auth::user()->id, "Destroy room $audit15->name");
        $audit15->state = "R";
        $audit15->save();
        Alert::success('Success', 'Room Successfully Deleted');
        return back();
    }

    
    function imprimir() {
        $audit = new Controller;
        $audit->audit("R", "Audit15", Auth::user()->id, "Report of room");
        $roles = audit15::all()->where("state","=","A");
        $pdf = \PDF::loadView('audit15.pdf', compact('roles'));
        return $pdf->download('Rooms.pdf');
    }
}
