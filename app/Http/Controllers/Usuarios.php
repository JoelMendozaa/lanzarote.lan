<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;

class Usuarios extends Controller
{
    public function index()
    {
        $users = User::all();
        return view('users.index', ['users' => $users]);
    }

    public function show($id)
    {
        $user = User::find($id);
        return view('users.show', ['user' => $user]);        
    }
}