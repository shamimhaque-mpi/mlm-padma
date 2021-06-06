<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Admin;
use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{

    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
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
        $this->middleware('guest:user');
        $this->middleware('guest:admin');
    }

    public function adminRegisterForm()
    {
        return view('auth.register', ['url' => 'admin']);
    }

    public function userRegisterForm()
    {
        return view('auth.register', ['url' => 'user']);
    }


    /**
     * Create a new user instance after a valid registration.
     *
     * @param array $data
     * @return \App\User
     */
    protected function createUser(Request $request)
    {
        $validatedData = $request->validate([
            'name'     => ['required', 'string', 'max:255'],
            'username' => ['required', 'string', 'min:6', 'max:255', 'unique:users'],
            'email'    => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);

        User::create([
            'name'     => $request['name'],
            'username' => $request['username'],
            'email'    => $request['email'],
            'user_id'  => $this->id_generate(), //floor(microtime(true)),
            'password' => Hash::make($request['password']),
        ]);

        return redirect()->intended('user/login');
    }

    public function createAdmin(Request $request)
    {
        $validatedData = $request->validate([
            'name'     => ['required', 'string', 'max:255'],
            'username' => ['required', 'string', 'min:6', 'max:255', 'unique:admins'],
            'email'    => ['required', 'string', 'email', 'max:255', 'unique:admins'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);

        Admin::create([
            'name'     => $request['name'],
            'username' => $request['username'],
            'email'    => $request['email'],
            'password' => Hash::make($request['password']),
        ]);

        return redirect()->intended('admin/login');
    }


    public function id_generate($length = 10)
    {
        return substr(str_shuffle(str_repeat($x='0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ', ceil($length/strlen($x)) )),1,$length);
    }
}
