<?php

namespace App\Http\Controllers\backend\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Category;
use App\Subcategory;
use Illuminate\Support\Str;

class SubcategoryController extends Controller
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
        $data['allCategory'] = Category::orderBy('position', 'asc')->get();


        $data['allSucategory'] = Subcategory::with('category')->orderBy('position', 'asc')->get();

        return view('backend.admin.subcategory.index', $data);
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
        $data = new Subcategory;

        $data->subcategory_name = $request->subcategory_name;
        $data->subcategory_slug = Str::slug($request->subcategory_name);
        $data->category_id      = $request->category_id;
        $data->position         = $request->position;

        // save data
        $data->save();

        return redirect()->route('admin.subcategory')->with('success', 'Subcategory successfully added.');
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
        // gat all category
        $data['allCategory'] = Category::orderBy('position', 'asc')->get();

        // get all subcategory
        $data['allSucategory'] = Subcategory::with('category')->orderBy('position', 'asc')->get();

        // get category info
        $data['info'] = Subcategory::find($id);

        return view('backend.admin.subcategory.edit', $data);
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
            'subcategory_name' => $request->subcategory_name,
            'subcategory_slug' => Str::slug($request->subcategory_name),
            'category_id'      => $request->category_id,
            'position'         => $request->position,
        ];

        Subcategory::where('id', $request->id)->update($data);

        return redirect()->route('admin.subcategory')->with('update', 'Subcategory successfully updated.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Subcategory::find($id)->delete();

        return redirect()->back()->with('delete', 'Subcategory successfully deleted.');
    }
}
