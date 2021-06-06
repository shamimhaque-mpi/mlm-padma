<?php

namespace App\Http\Controllers\backend\admin;

use App\Http\Controllers\Controller;
use App\Sponsor;
use Illuminate\Http\Request;

class SponsorController extends Controller
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

        // get all data
        $data['allSponsor'] = Sponsor::all();

        return view('backend.sponsor.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // get all data
        $data['position'] = count(Sponsor::select('id')->get()) + 1;


        return view('backend.sponsor.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = new Sponsor;

        $data->name      = $request->sponsor_name;
        $data->mobile    = $request->mobile;
        $data->email     = $request->email;
        $data->address   = $request->address;
        $data->site_link = $request->site_link;
        $data->position  = $request->position;
        $data->status    = $request->status;


        // upload image
        $destinationPath = public_path('uploads/sponsor');

        // check directory is exists
        if (!is_dir($destinationPath)) {
            if (!mkdir($destinationPath, 0777, true)) {
                die('Failed to create folders...');
            }
        }

        if ($file = $request->file('logo')) {

            $image_name = preg_replace('/[^A-Za-z0-9\-]/', '-', str_replace(' ', '-', $file->getClientOriginalName()));

            $image_name      = $image_name . '-' . date('YmdHmi') . '.' . $file->getClientOriginalExtension();
            $destinationPath = public_path('uploads/sponsor');
            $file->move($destinationPath, $image_name);
            $data->logo = 'public/uploads/sponsor/' . $image_name;
        }

        $data->save();

        return redirect()->route('sponsor')->with('success', 'Sponsor successfully created.');
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // get all data
        $data['info'] = Sponsor::where('id', $id)->first();


        return view('backend.sponsor.show', $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // get all data
        $data['info'] = Sponsor::where('id', $id)->first();

        return view('backend.sponsor.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {

        $data = [
            'name' => $request->sponsor_name,
            'mobile' => $request->mobile,
            'email' => $request->email,
            'address' => $request->address,
            'site_link' => $request->site_link,
            'position' => $request->position,
            'status' => $request->status,
        ];


        // upload image
        $destinationPath = public_path('uploads/sponsor');

        // check directory is exists
        if (!is_dir($destinationPath)) {
            if (!mkdir($destinationPath, 0777, true)) {
                die('Failed to create folders...');
            }
        }

        if ($file = $request->file('logo')) {

            // check file exists delete data
            if (!empty($request->old_logo)){
                if (file_exists($request->old_logo)){
                    unlink($request->old_logo);
                }
            }

            $image_name = preg_replace('/[^A-Za-z0-9\-]/', '-', str_replace(' ', '-', $file->getClientOriginalName()));

            $image_name      = $image_name . '-' . date('YmdHmi') . '.' . $file->getClientOriginalExtension();
            $destinationPath = public_path('uploads/sponsor');
            $file->move($destinationPath, $image_name);
            $data['logo'] = 'public/uploads/sponsor/' . $image_name;
        }

        Sponsor::where('id', $request->id)->update($data);

        return redirect()->route('sponsor')->with('success', 'Sponsor successfully updated.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        Sponsor::find($id)->delete();

        return redirect()->back()->with('delete', 'Sponsor successfully deleted.');
    }
}
