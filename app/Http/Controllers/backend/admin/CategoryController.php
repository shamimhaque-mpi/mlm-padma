<?php

namespace App\Http\Controllers\backend\admin;

use App\Http\Controllers\Controller;
use App\Icon;
use Illuminate\Http\Request;
use App\Category;
use Illuminate\Support\Str;

class CategoryController extends Controller
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
        // get all liner font
        $data['allIcons'] = Icon::select('class_name')->get();

        // get all category
        $data['allCategories'] = Category::orderBy('position', 'asc')->get();


        return view('backend.admin.category.index', $data);
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
        $data = new Category;

        $data->category_name = $request->category_name;
        $data->icon          = $request->icon;
        $data->category_slug = Str::slug($request->category_name);
        $data->position      = $request->position;

        // save data
        $data->save();

        return redirect()->route('admin.category')->with('success', 'Category successfully added.');
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
        // get all liner font
        $data['allIcons'] = Icon::select('class_name')->get();

        // get all data
        $data['allCategories'] = Category::orderBy('position', 'asc')->get();

        // get category info
        $data['info'] = Category::find($id);

        return view('backend.admin.category.edit', $data);
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

        Category::where('id', $request->id)
            ->update(
                [
                    'category_name' => $request->category_name,
                    'icon'          => $request->icon,
                    'position'      => $request->position,
                    'category_slug' => Str::slug($request->category_name, '-'),
                ]
            );

        return redirect()->route('admin.category')->with('update', 'Category successfully updated.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Category::find($id)->delete();

        return redirect()->back()->with('delete', 'Category successfully deleted.');
    }
}
