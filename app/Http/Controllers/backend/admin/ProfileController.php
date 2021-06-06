<?php

namespace App\Http\Controllers\backend\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth, Hash;
use App\Admin;

class ProfileController extends Controller
{

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:admin');
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['info'] = Auth::user();

        return view('backend.admin.profile.show', $data);
    }

    

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit()
    {

        $data['info'] = Auth::user();

        return view('backend.admin.profile.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {


        $data = [
            'name' => $request->name,
            'mobile' => $request->mobile,
            'email' => $request->email,
            'address' => $request->address
        ];

        // upload image
        $destinationPath = public_path('uploads/admin');

        // check directory is exists
        if (!is_dir($destinationPath)) {
            if (!mkdir($destinationPath, 0777, true)) {
                die('Failed to create folders...');
            }
        }

        if ($request->file('photo')) {

            $file = $request->file('photo');

            // check file exists delete data
            if (!empty($request->old_photo)){
                if (file_exists($request->old_photo)){
                    unlink($request->old_photo);
                }
            }

            $image_name = strtolower(preg_replace('/[^A-Za-z0-9\-]/', '-', str_replace(' ', '-', $file->getClientOriginalName()))) . '-' . date('YmdHmi') . '.' . $file->getClientOriginalExtension();
            
            $file->move($destinationPath, $image_name);
            $data['photo'] = 'public/uploads/admin/' . $image_name;
        }

        Admin::where('id', Auth::user()->id)->update($data);

        return redirect()->route('admin.profile')->with('update', 'Profile successfully updated.');
    }  


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function changePassword()
    {
        return view('backend.admin.profile.password');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function updatePassword(Request $request)
    {
       
       
        $validate = $request->validate([
            'password'      => 'required|min:8',
            're_password'   => 'required|same:password',
        ]);

        
        if($validate){

            Admin::where('id', Auth::user()->id)->update(['password'=> Hash::make($request->password)]);

            Auth::guard('admin')->logout();

            return redirect()->route('admin.login')->with('success', 'Your Password Has Been Changed Successfully');
        }
       

        return view('backend.admin.password');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
