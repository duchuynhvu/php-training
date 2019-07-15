<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequest;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
//
//
//    //Authentication ******************************************
//    public function showLoginForm()
//    {
//        return view('auth.login');
//    }
//
//    public function login(LoginRequest $request)
//    {
//        $credentials = $request->only('email', 'password');
//        $remember = $request->remember;
//        if (Auth::attempt($credentials, $remember)) {
//
//            //authentication passed.....
//
//            //redirect the user to the URL they were attempting to access before being intercepted by the authentication middleware
//            return redirect()->intended('/home');
//        } else {
//            return back()->with('error', 'Email or password is wrong!');
//        }
//    }
//
//    public function logout(Request $request)
//    {
//        Auth::logout();
//        return redirect('/');
//    }
}
