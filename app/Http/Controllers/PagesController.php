<?php

namespace App\Http\Controllers;
use App\User;
use App\Project;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    
    public function welcome()
    {
        $user = User::where('email','casc.santana@gmail.com')->first();
        $projects = Project::orderBy('name', 'desc')->get();
        return view('welcome', compact('user', 'projects'));
    }
}
