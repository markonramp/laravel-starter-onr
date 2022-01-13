<?php

namespace App\Http\Controllers;


use App\Models\User;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function create() {
        return view('register');
    }

    public function store() {
        // dd(request()->all());
        $attributes = request()->validate([
            'name' => ['required', 'max:255', 'unique:users,name'],
            // 'name' => ['required', 'max:255', Rule::unique('users', 'name')],
            'email'  => ['required', 'email', 'max:255', 'unique:users,email'],
            'password'  => 'required'
        ]);

        $attributes['password'] = bcrypt($attributes['password']);
        $user = User::create($attributes);

        // User::create([
        //     'name' => $attributes['name'],
        //     'email' => $attributes['email'],
        //     'password' => bcrypt($attributes['password'])
        // ]);
        auth()->login($user);
        session()->flash('success', 'Your account has been created.');

        return view('index');
    }
}
