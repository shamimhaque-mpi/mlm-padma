<?php

namespace App\Http\Controllers\backend\admin;

use App\Brand;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class BrandController extends Controller
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
        $data['allBrand'] = Brand::orderBy('position', 'asc')->get();

        return view('backend.admin.brand.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = new Brand;

        $data->brand_name = $request->brand_name;
        $data->brand_slug = Str::slug($request->brand_name);
        $data->position   = $request->position;

        // upload image
        $destinationPath = public_path('uploads/brand');

        // check directory is exists
        if (!is_dir($destinationPath)) {
            if (!mkdir($destinationPath, 0777, true)) {
                die('Failed to create folders...');
            }
        }

        if ($file = $request->file('brand_logo')) {

            $image_name = preg_replace('/[^A-Za-z0-9\-]/', '-', str_replace(' ', '-', $file->getClientOriginalName()));

            $image_name = $image_name . '-' . floor(microtime(true)) . '.' . $file->getClientOriginalExtension();
            $file->move($destinationPath, $image_name);
            $data->brand_logo = 'public/uploads/brand/' . $image_name;
        }

        // save data
        $data->save();

        return redirect()->route('admin.brand')->with('success', 'Brand successfully added.');
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // get all brand
        $data['allBrand'] = Brand::orderBy('position', 'asc')->get();

        // get category info
        $data['info'] = Brand::find($id);

        return view('backend.admin.brand.edit', $data);
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
            'brand_name' => $request->brand_name,
            'brand_slug' => Str::slug($request->brand_name),
            'position'   => $request->position,
        ];

        // upload image
        $destinationPath = public_path('uploads/brand');

        // check directory is exists
        if (!is_dir($destinationPath)) {
            if (!mkdir($destinationPath, 0777, true)) {
                die('Failed to create folders...');
            }
        }

        if ($file = $request->file('brand_logo')) {

            // check file exists delete data
            if (!empty($request->old_brand_logo)){
                if (file_exists($request->old_brand_logo)){
                    unlink($request->old_brand_logo);
                }
            }

            $image_name = preg_replace('/[^A-Za-z0-9\-]/', '-', str_replace(' ', '-', $file->getClientOriginalName()));

            $image_name = $image_name . '-' . floor(microtime(true)) . '.' . $file->getClientOriginalExtension();
            $file->move($destinationPath, $image_name);
            $data['brand_logo'] = 'public/uploads/brand/' . $image_name;
        }

        Brand::where('id', $request->id)->update($data);

        return redirect()->route('admin.brand')->with('update', 'Brand successfully updated.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Brand::find($id)->delete();

        return redirect()->back()->with('delete', 'Brand successfully deleted.');
    }
}
