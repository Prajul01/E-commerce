<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Controllers\frontend\FrontendBaseController;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
 use RealRashid\SweetAlert\Facades\Alert;

class LoginController extends FrontendBaseController
{
    protected $title;
    protected $view ='frontend.';

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

    public function login(Request $request)
    {
        $this->title= 'Product';
        $input = $request->all();

        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if(auth()->attempt(array('email' => $input['email'], 'password' => $input['password'])))
        {
            if (auth()->user()->status == 'admin') {
                return redirect()->route('admin.home');
            }else if (auth()->user()->status == 'manager') {
                return redirect()->route('manager.home');
            }else{
                return redirect()->route('frontend.home');
            }
        }else{
            Alert::error('Error', 'Email  or Password didnot matched');
            return view($this->__loadDataToView( 'auth.login'));



        }

    }
}
