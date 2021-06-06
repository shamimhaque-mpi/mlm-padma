<?php

namespace App\Http\Controllers\backend\user;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Icon;
use App\User;
use Auth, Hash;

class UserController extends Controller
{
    public function __construct(){
    	$this->middleware('auth:user');
    }

    public function index()
    {
    	$user = Auth::guard('user')->user();
    	return view('backend.user.my_profile.view', compact("user"));
    }
    // User Profile Edit
    public function edit()
    {
    	$user = Auth::guard('user')->user();
    	return view('backend.user.my_profile.edit', compact("user"));
    }
    // User Profile Update
    public function update(Request $request)
    {
    	$request->validate([
    		'name'	 => 'required',
    		'mobile' => 'required'
    	]);

    	$data = $request->except(['_token']);

    	if($request->image){
    		if(file_exists(Auth::guard('user')->user()->iamge)){
    			unlink(Auth::guard('user')->user()->image);
    		}
    		$path 			= 'public/uploads/user/';
			$extension  	= $request->image->getClientOriginalExtension();
			$name 			= time().'.'.$extension;
			$data['photo']	= $path.$name;
			$request->image->move($path, $name);
    	}

    	User::where('id', Auth::guard('user')->user()->id)->update($data);

    	return redirect()->route('user.profile')->with('success', 'Your Profile Updated Successfully');
    }

    public function changePassword(Request $request)
    {
    	if($request->isMethod('POST'))
    	{
    		$request->validate([
    			'password'		=> 'required|min:8',
    			're_password'	=> 'required|same:password',
    		]);
    		User::where('id', Auth::guard('user')->user()->id)->update(['password'=>Hash::make($request->password)]);
    		Auth::guard('user')->logout();
    		return redirect()->route('user.login')->with('success', 'Your Password Has Been Changed Successfully');
    	}
    	return view('backend.user.my_profile.change_password');
    }
}
