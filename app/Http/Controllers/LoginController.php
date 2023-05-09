<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use Illuminate\Http\Request;
// Built in class that handles the authentication for the users
use Illuminate\Support\Facades\Auth;


class LoginController extends Controller
{
    //Display Login Page
    public function show(){
        return view('auth.login');
    }
    
    // Handle account login request to ensure 
    public function authLogin(LoginRequest $request){
        $credentials = $request->getCredentials();
        if(!Auth::validate($credentials)){
            return redirect()->to('login')->withErrors(trans('auth.failed'));
            // return redirect('login')->with('errors','Incorrect Login Credentials');
        }
        $user = Auth::getProvider()->retrieveByCredentials($credentials);
        Auth::login($user);

        if ($user->id == 1) { // replace 123 with the specified user ID
            return redirect('/guestlist');
        } else {
            return redirect()->intended();
        }

        // return $this->authenticated($request, $user);
        // authenticated will handle the reponse after the user is authenticated
    }
    // Handle response after the user authenticated
    // protected function authenticated($user)
    // {   
    //     return redirect()->intended();
    // }

    // public function showView()
    // {
    // $user = auth()->user();
    // if ($user->id == 3) { // replace 123 with the specified user ID
    //     return view('admin.guestlist');
    // } else {
    //     return view('/');
    // }
}
