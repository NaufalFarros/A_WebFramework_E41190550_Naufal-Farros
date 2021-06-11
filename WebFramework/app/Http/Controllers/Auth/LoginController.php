<?php

namespace App\Http\Controllers\Auth;
use Auth;
use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
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
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
    public function Login(request $request){

        $this->validate($request, [
            
            'username' => 'required|string',
            'password' => 'required|string'

        ]);
        $loginType = filter_var($request->username,FILTER_VALIDATE_EMAIL) ? 'email' : 'username' ;
        $login = [
            $loginType => $request-> username,
            'password' => $request-> password
        ];
        if(auth()->attempt($login)){
            return redirect()->route('admin');

        } else {
            return redirect()->route('login')->with(['error' => 'Username Atau Password Salah']);
        }

    }
    public function Logout(request $request){
        Auth::logout();
        return redirect()->route('login');
    }





}
