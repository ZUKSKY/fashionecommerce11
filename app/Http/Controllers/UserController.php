<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function index()
    {
        return view('user.index');
    }

    public function logout(Request $request)
    {
        Auth::logout();
        return redirect()->route('user.index'); // Redirect to home or any other route after logout
    }
}