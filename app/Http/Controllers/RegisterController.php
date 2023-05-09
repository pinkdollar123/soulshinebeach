<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Requests\RegisterRequest;


class RegisterController extends Controller
{
    //Shows the viewing page of register page from auth folder -> register blade file
    public function show(){
        return view('auth.register');
    }

    public function register(RegisterRequest $request)
    {
        # code...
        $storedData = User::create($request->validated());
        auth()->login($storedData);
        return redirect('/')->with('success', 'You are successfully registered');
    }
}
