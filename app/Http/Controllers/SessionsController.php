<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SessionsController extends Controller
{
    public function destroy() {
        auth()->logout();

        return redirect('/')->with('success', 'You have logged out');
    }

    public function login() {
        auth()->login();
    }
}
