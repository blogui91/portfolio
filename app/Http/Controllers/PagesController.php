<?php

namespace App\Http\Controllers;
use App\User;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    
    public function welcome()
    {
        $user = User::where('email','casc.santana@gmail.com')->first();

        return view('welcome', compact('user'));
    }
}
