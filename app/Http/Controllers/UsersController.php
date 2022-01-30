<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UsersController extends Controller
{

    public function userdashboard()
    {
        $users = User::all();
        return view('userdatabase',compact('users'));
    }
    public function create()
    {
        return view('createuser');

    }

    public function store(Request $request)
    {
        $user = new User;

        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = $request->password;
        $user->is_admin = $request->is_admin;

        $user->save();

        return redirect('/userdashboard');
    }

    public function destroy($id)
    {
        User::findOrFail($id)->delete();

        return redirect('/userdashboard')->with('msg', 'Funcionário removido');
    }

}
