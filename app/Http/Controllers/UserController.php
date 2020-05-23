<?php

namespace App\Http\Controllers;

use Alert;
use Auth;
use App\User;
use Illuminate\Http\Request;
use Caffeinated\Shinobi\Models\Role;
use Illuminate\Foundation\Auth\SendsPasswordResetEmails;
use Illuminate\Support\Facades\Password;


class UserController extends Controller
{

    use SendsPasswordResetEmails;

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::where("id", "<>",Auth::user()->id)->paginate(4);
        return view('users.index', compact('users'));
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
     * @param  \App\user  $user
     * @return \Illuminate\Http\Response
     */
    public function show(user $user)
    {
        $audit = new Controller;
        $audit->audit("R", "User", Auth::user()->id, "Show user $user->name");
        return view('users.show', compact('user'));
    }


    /**
     * Display the specified resource.
     *
     * @param  \App\user  $user
     * @return \Illuminate\Http\Response
     */
    public function profile(user $userr)
    {
        $audit = new Controller;
        $audit->audit("R", "User", Auth::user()->id, "Show profile $userr->name");
        return view('users.profile', compact('userr'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\user  $user
     * @return \Illuminate\Http\Response
     */
    public function edit($user)
    {
        $use = User::find($user);
        $roles = Role::get();

        return view('users.edit', compact('use', 'roles'));
    }

    public function edit2($userr)
    {
        $use = User::find($userr);
        $roles = Role::get();

        return view('users.edit2', compact('use', 'roles'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\user  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $user = User::find($id);

        $audit = new Controller;
        $audit->audit("U", "User", Auth::user()->id, "Update user $user->name");

        $user->update($request->all());

        $user->roles()->sync($request->get('roles'));

        Alert::success('Success', 'User Successfully Modified');
        return redirect()->route('users.edit', $user->id)
            ->with('info', 'Usuario guardado con éxito');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\user  $user
     * @return \Illuminate\Http\Response
     */
    public function update2(Request $request, $id)
    {
        $email=$request["email"];
        $name=$request["name"];
        $user = User::find($id);

        $audit = new Controller;
        $audit->audit("U", "User", Auth::user()->id, "Update profile user $user->name");

        $user->name=$name;
        $user->email=$email;
        $user->save();

        Alert::success('Success', 'User Successfully Modified Profile');
        return redirect()->route('users.edit2', $user->id)
            ->with('info', 'Usuario guardado con éxito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\user  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        $audit = new Controller;
        $audit->audit("D", "Audit06", Auth::user()->id, "Destroy user $user->name");

        $user->delete();
        Alert::success('Success', 'User Has Been Successfully Deleted');
        return back();
    }

    public function state(Request $request)
    {
        $opt=$request["opt"];
        $iduser=$request["iduser"];

        $userstate = User::all()->where("id", "=","$iduser")->first();
 
        if($opt==0)
        {
            $userstate->active = "0";
            $messg = "deactivate";
            $audit = new Controller;
            $audit->audit("U", "User", Auth::user()->id, "Update user $userstate->name state to  $userstate->active ");

            $userstate->save();
            Alert::success('Success', "The user has been successfully deactivated");
        }else {
            $userstate->active = "1";
            $response = $this->sendResetLinkEmail($userstate->email);
            if ($response=="1") {
                $audit = new Controller;
                $audit->audit("U", "User", Auth::user()->id, "Update user $userstate->name state to  $userstate->active 
                and reset the password by sending email");

                $userstate->save();
                Alert::success('Success', "User has been successfully activated ");
            }else{
                Alert::success('Success', "The user has not been successfully activated");
            }
        }
        return back();
    }

    function imprimir() {
        $users = User::all();

        $pdf = \PDF::loadView('users.pdf', compact('users'));
        return $pdf->download('Users.pdf');
    }

    public function sendResetLinkEmail($email)
    {
        $response = $this->broker()->sendResetLink(
            ['email' => $email]
        );

        return $response == Password::RESET_LINK_SENT
                    ? "1"
                    : "0";
    }
}
