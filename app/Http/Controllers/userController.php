<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class userController extends Controller
{
    //
    public function index()
    {
        $users = User::latest()->get();
        return view('users', compact('users'));
    }
}
 
