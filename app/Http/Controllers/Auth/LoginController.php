<?php

namespace App\Http\Controllers\Auth;


use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Auth;
use Validator;

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
    //protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Login username to be used by the controller.
     *
     * @var string
     */
    protected $username;

    /**
     * Create a new controller instance.
     */
    public function __construct()
    {
        $this->middleware('guest:user')->except('userLogout');
        $this->middleware('guest:admin')->except('adminLogout');

        $this->username = $this->findUsername();
    }

    // admin login form
    public function adminLoginForm()
    {
        return view('auth.login', ['url' => 'admin']);
    }

    public function adminLogin(Request $request)
    {

        $validator = Validator::make($request->input(), [
            $this->username => ($this->username == 'email' ? 'required|email' : 'required|username|min:6'),
            'password' => 'required|min:8',
        ]);

        if (Auth::guard('admin')->attempt([$this->username => $request->login, 'password' => $request->password], $request->get('remember'))) {

            return redirect()->route('admin.dashboard')->with('success', 'Admin login successful.');
        }
        return back()->withInput($request->only('email', 'remember'));
    }

    // admin logout
    public function adminLogout()
    {

        Auth::guard('admin')->logout();

        return redirect()->route('admin.login');
    }

    // user login form
    public function userLoginForm()
    {

        return view('auth.login', ['url' => 'user']);
    }

    public function userLogin(Request $request)
    {

        Validator::make($request->input(), [
            $this->username => ($this->username == 'email' ? 'required|email' : 'required|username|min:6'),
            'password' => 'required|min:6',
        ]);


        if (Auth::guard('user')->attempt([$this->username => $request->login, 'password' => $request->password], $request->get('remember'))) {

            return redirect()->route('user.dashboard')->with('success', 'User login successful.');
        }
        return back()->withInput($request->only('email', 'remember'));
    }

    // user logout
    public function userLogout()
    {

        Auth::guard('user')->logout();

        return redirect()->route('user.login');
    }


    /**
     * Get the login username to be used by the controller.
     *
     * @return string
     */
    public function findUsername()
    {
        $login = request()->input('login');

        $fieldType = filter_var($login, FILTER_VALIDATE_EMAIL) ? 'email' : 'username';

        request()->merge([$fieldType => $login]);

        return $fieldType;
    }

    /**
     * Get username property.
     *
     * @return string
     */
    public function username()
    {
        return $this->username;
    }
}
