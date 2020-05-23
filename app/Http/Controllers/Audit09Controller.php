<?php

namespace App\Http\Controllers;

use App\audit09;
use Illuminate\Http\Request;
use Alert;
use Auth;

class Audit09Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $roles = audit09::where("state","=","A")->paginate(4);
        return view('audit09.index', compact('roles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $permissions = audit09::get();
        return view('audit09.create', compact('permissions'));
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
        $audit->audit("C", "Audit09", Auth::user()->id, "Create new actor $name");
        $role = audit09::create($request->all());

        Alert::success('Success', 'Actor Successfully Create');
        $roles = audit09::where("state","=","A")->paginate(4);
        //return view('roles.index', compact('roles'));
        return redirect()->route('audit09.index', $roles);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\audit09  $audit09
     * @return \Illuminate\Http\Response
     */
    public function show(audit09 $audit09)
    {
        $audit = new Controller;
        $audit->audit("R", "Audit09", Auth::user()->id, "Show Actor $audit09->name");
        return view('audit09.show', compact('audit09'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\audit09  $audit09
     * @return \Illuminate\Http\Response
     */
    public function edit($actors)
    {
        $role = audit09::find($actors);
        return view('audit09.edit', compact('role'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\audit09  $audit09
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $name = $request["name"];
        $audit = new Controller;
        
        $role = audit09::find($id);
        $audit->audit("U", "Audit09", Auth::user()->id, "Update actor $role->name to $name");
        $role->update($request->all());

        Alert::success('Success', 'Actor Successfully Modified');
        return redirect()->route('audit09.edit', $role->idactors)
            ->with('info', 'Actor guardado con éxito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\audit09  $audit09
     * @return \Illuminate\Http\Response
     */
    public function destroy(audit09 $audit09)
    {
        $audit = new Controller;
        $audit->audit("D", "Audit09", Auth::user()->id, "Destroy actor $audit09->name");
        $audit09->state = "R";
        $audit09->save();
        Alert::success('Success', 'Actor Successfully Deleted');
        return back();
    }

    function imprimir() {
        $audit = new Controller;
        $audit->audit("R", "Audit09", Auth::user()->id, "Report of actors");
        $roles = audit09::all()->where("state","=","A");
        $pdf = \PDF::loadView('audit09.pdf', compact('roles'));
        return $pdf->download('Actors.pdf');
    }
}
