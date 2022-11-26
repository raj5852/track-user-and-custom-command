<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    //
    function index()
    {
        $user = User::create([
            'name'=>'raj',
            'email'=>'raj@gmail.co',
            'password'=>Hash::make('password')
        ]);
        // insert  user ip
        $user->trackUser($user->id);

        return "success";

    }
}
