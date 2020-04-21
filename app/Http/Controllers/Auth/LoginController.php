<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;


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
    protected $redirectTo = '/login';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function index()
    {
        return view('login');
    }

    public function login(Request $request)
    {
        $creds= $request->only([ 'email','password' ]);

        $validator= $this->validator($creds);

        $remember= $request->input('remember', false);

        if($validator->fails()) {
            return redirect()->route('login')
            ->withErrors($validator)
            ->withInput();
        } 

        if(Auth::attempt($creds, $remember)){
            return redirect()->route('home.index');
        }else {
            return redirect()->route('login')
            ->with('warning','E-mail e/ou Senha Inválidos');
           
        }
    }


    public function logout()
    {
        Auth::logout();
        return redirect()->route('login');
    }



    protected function validator(array $data)
    {
        return Validator::make($data, [
            'email'=>['required', 'string', 'email', 'max:100'],
            'password'=> ['required', 'string', 'min:4']
        ]);
    }
}
