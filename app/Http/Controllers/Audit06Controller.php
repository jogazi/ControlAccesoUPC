<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Caffeinated\Shinobi\Models\Role;
use Caffeinated\Shinobi\Models\Permission;
use Alert;
use Auth;

class Audit06Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $roles = Role::where("state","=","A")->paginate(4);
        return view('roles.index', compact('roles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $permissions = Permission::get();
        return view('roles.create', compact('permissions'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $audit = new Controller;
        $audit->audit("C", "Audit06", Auth::user()->id, "Create");
        $role = Role::create($request->all());
        $role->permissions()->sync($request->get('permissions'));

        Alert::success('Success', 'Role Successfully Modified');
        $roles = Role::where("state","=","A")->paginate(4);
        //return view('roles.index', compact('roles'));
                return redirect()->route('roles.index', $roles);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Role  $roles
     * @return \Illuminate\Http\Response
     */
    public function show(Role $roles)
    {
        $audit = new Controller;
        $audit->audit("R", "Audit06", Auth::user()->id, "Show");
        return view('roles.show', compact('roles'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Role  $roles
     * @return \Illuminate\Http\Response
     */
    public function edit($roles)
    {
        $role = Role::find($roles);
        $permissions = Permission::get();
        
        return view('roles.edit', compact('role', 'permissions'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Role  $roles
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $audit = new Controller;
        $audit->audit("U", "Audit06", Auth::user()->id, "Update");
        $role = Role::find($id);
        $role->update($request->all());
        $role->permissions()->sync($request->get('permissions'));
        Alert::success('Success', 'Role Successfully Modified');
        return redirect()->route('roles.edit', $role->id)
            ->with('info', 'Rol guardado con éxito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Role  $role
     * @return \Illuminate\Http\Response
     */
    public function destroy(Role $roles)
    {
        $audit = new Controller;
        $audit->audit("D", "Audit06", Auth::user()->id, "Destroy");
        $roles->state = "R";
        $roles->save();
        Alert::success('Success', 'Role Successfully Deleted');
        return back();
    }

    function imprimir() {
        $audit = new Controller;
        $audit->audit("R", "Audit06", Auth::user()->id, "Report");
        $roles = Role::all()->where("state","=","A");
        $pdf = \PDF::loadView('roles.pdf', compact('roles'));
        return $pdf->download('Roles.pdf');
    }

}
