<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
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

    public function loginPage()
    {
        if(!empty(Auth::check()))
        {
            return redirect()->back();
            
        }
        else{
            return view('auth.login');
        }
              
    }

    public function login(Request $request)
    {   
        $input = $request->all();
     
        $this->validate($request, [
            'name' => 'required',
            'password' => 'required',
        ]);
     
        if(auth()->attempt(array('name' => $input['name'], 'password' => $input['password'])))
        {
            if (auth()->user()->type == '0' || auth()->user()->type == '1') {

                return redirect()->route('home');

            }else{
                return redirect()->route('managereport.home');
            }
        }else{
            return redirect()->route('login')
                ->with('error','Name And Password Are Wrong.');
        }
          
    }

}
