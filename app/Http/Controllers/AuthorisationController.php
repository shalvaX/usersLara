<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
class AuthorisationController extends Controller
{
    public function register(Request $request){
        $request->validate([
           'name' => ['required','min:10','max:50','string'],
           'email' => ['required'],
           'password' => ['required','min:4','max:50','confirmed'],
        ]);
        User::create([
           'name' => $request->name,
           'email' => $request -> email,
            'password' => $request -> password,
        ]);
        return $request->all();
    }
}
