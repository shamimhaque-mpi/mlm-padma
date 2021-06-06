<?php

namespace App\Http\Controllers\backend\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Controllers\backend\user\GenerationControl as Gn;
use App\User;
use Hash;

class MemberController extends Controller
{
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
        $data['results'] = User::orderBy('id', 'DESC')->get();


        return view('backend.admin.members.index', $data);
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // get all user
        $data['allUser'] = User::select('user_id', 'name', 'address')->get();

        return view('backend.admin.members.create', $data);
    }


     /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       
        $request->validate([
            'name'     => ['required', 'string', 'max:255'],
            'mobile'   => ['required', 'string', 'max:25'],
            'username' => ['required', 'string', 'min:6', 'max:255', 'unique:users'],
            'email'    => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'same:confirm_password'],
        ]);


        $data = new User;

        $data->name       = $request->name;
        $data->mobile     = $request->mobile;
        $data->email      = $request->email;
        $data->user_id    = $this->id_generate();
        $data->refer_id   = $request->refer_id;
        $data->country    = $request->country;
        $data->division   = $request->division;
        $data->city       = $request->city;
        $data->address    = $request->address;
        $data->username   = $request->username;
        $data->password   = Hash::make($request['password']);


         // upload image
        $destinationPath = public_path('uploads/user');

        // check directory is exists
        if (!is_dir($destinationPath)) {
            if (!mkdir($destinationPath, 0777, true)) {
                die('Failed to create folders...');
            }
        }

        if ($request->file('photo')) {

            $file = $request->file('photo');

            $image_name = strtolower(preg_replace('/[^A-Za-z0-9\-]/', '-', str_replace(' ', '-', $file->getClientOriginalName()))) . '-' . date('YmdHmi') . '.' . $file->getClientOriginalExtension();

            $file->move($destinationPath, $image_name);
            $data->photo = 'public/uploads/user/' . $image_name;
        }

        $data->save();


        return redirect()->route('admin.member')->with('success', 'Member successfully added.');
    }


     /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data['info'] = User::where('user_id', $id)->first();

        return view('backend.admin.members.show', $data);
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        // get all user
        $data['allUser'] = User::select('user_id', 'name', 'address')->get();

        // get user info
        $data['info'] = User::where('id', $id)->first();

        return view('backend.admin.members.edit', $data);
    }


    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        
        $data = [
            'name'      => $request->name,
            'mobile'    => $request->mobile,
            'refer_id'  => $request->refer_id,
            'country'   => $request->country,
            'division'  => $request->division,
            'city'      => $request->city,
            'address'   => $request->address,
        ];

         // upload image
        $destinationPath = public_path('uploads/user');

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
            $data['photo'] = 'public/uploads/user/' . $image_name;
        }


        User::where('id', $id)->update($data);

        return redirect()->route('admin.member')->with('update', 'Member successfully updated.');
        
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        User::find($id)->delete();

        return redirect()->back()->with('delete', 'User successfully deleted.');
    }



    public function tree($user_id)
    {
        $getGene = new Gn();
        $tree = (object)$getGene->generate($user_id);
        $user = User::where('user_id', $user_id)->first();
        return view('backend.admin.members.tree', compact('tree', 'user'));
    }


    public function id_generate($length = 10)
    {
        return substr(str_shuffle(str_repeat($x='0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ', ceil($length/strlen($x)) )),1,$length);
    }
}
