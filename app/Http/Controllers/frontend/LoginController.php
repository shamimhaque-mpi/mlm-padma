<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use App\User;
use Auth, Hash;
use Validator;

class LoginController extends Controller
{

    /**
     * Login username to be used by the controller.
     *
     * @var string
     */
    protected $username;


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (Auth::check()) {
            return redirect()->route('home');
        }

        return view('frontend.pages.login');
    }


    public function register(Request $request){

        $request->validate([
            'name'     => 'required|string|max:255',
            'mobile'   => 'required|string|max:25',
            'username' => 'required|string|min:6|max:28|unique:users',
            'email'    => 'required|string|email|max:128|unique:users',
            'password' => 'required|string|min:8|same:confirm_password',
            'confirm_password' => 'required|string|min:8',
        ]);



        if(!empty($request->refer_id)){
            $request->validate(['refer_id' => 'string|max:255|exists:users,user_id']);
        }


        $data = new User;

        $data->refer_id   = $request->refer_id;
        $data->name       = $request->name;
        $data->mobile     = $request->mobile;
        $data->email      = $request->email;
        $data->user_id    = $this->id_generate();
        $data->username   = $request->username;
        $data->password   = Hash::make($request['password']);

        $data->save();

        return redirect()->back()->with('success', 'You are successfully registered.');
    }



    public function id_generate($length = 10)
    {
        return substr(str_shuffle(str_repeat($x='0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ', ceil($length/strlen($x)) )),1,$length);
    }


    // user logout
    public function loginUser(Request $request)
    {

        $this->username = $this->findUsername();
       
        $request->validate([
           /*$this->username => ($this->username == 'email' ? 'required|email|exists:users' : 'required|username|min:6|exists:users'),*/
            'password' => 'required|min:6',
        ]);


        if (Auth::guard('user')->attempt([$this->username => $request->login, 'password' => $request->password], $request->get('remember'))) {

            return redirect()->route('home')->with('success', 'User login successful.');
        }

        return back()->withInput($request->only('email', 'remember'));
    } 


    // user logout
    public function logoutUser()
    {

        Auth::guard('user')->logout();

        return redirect()->route('home');
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
