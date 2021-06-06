<?php

namespace App\Http\Controllers\backend\admin;

use App\Category;
use App\District;
use App\Http\Controllers\Controller;
use App\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['allPost'] = Post::with('category')->orderBy('post_position', 'asc')->get();

        return view('backend.post.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        // get position
        $data['position'] = count(Post::select('id')->get()) + 1;

        // get all category
        $data['allCategory'] = Category::all();


        // get all district
        $data['allDistrict'] = District::all();


        return view('backend.post.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $data = new Post;

        $data->title         = $request->title;
        $data->category_id   = $request->category_id;
        $data->district_id   = $request->district_id;
        $data->upazila_id    = $request->upazila_id;
        $data->company_name  = $request->company_name;
        $data->description   = $request->description;
        $data->salary_from   = $request->salary_from;
        $data->salary_to     = $request->salary_to;
        $data->featured_post = $request->featured_post;
        $data->status        = $request->status;
        $data->job_type      = $request->job_type;
        $data->end_date      = $request->end_date;
        $data->post_position = $request->post_position;


        // upload image
        $destinationPath = public_path('uploads/post/company_logo');

        // check directory is exists
        if (!is_dir($destinationPath)) {
            if (!mkdir($destinationPath, 0777, true)) {
                die('Failed to create folders...');
            }
        }

        if ($file = $request->file('company_logo')) {

            $image_name = preg_replace('/[^A-Za-z0-9\-]/', '-', str_replace(' ', '-', $file->getClientOriginalName()));

            $image_name      = $image_name . '-' . date('YmdHmi') . '.' . $file->getClientOriginalExtension();
            $destinationPath = public_path('uploads/post/company_logo');
            $file->move($destinationPath, $image_name);
            $data->company_logo = 'public/uploads/post/company_logo/' . $image_name;
        }

        $data->save();

        return redirect()->route('post')->with('success', 'Post successfully created.');
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data['info'] = Post::with('category', 'district', 'upazila')->where('id', $id)->first();

        return view('backend.post.show', $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        // get all category
        $data['allCategory'] = Category::all();


        // get all district
        $data['allDistrict'] = District::all();

        // get post info
        $data['info'] = Post::where('id', $id)->first();

        return view('backend.post.edit', $data);
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
            'title'         => $request->title,
            'category_id'   => $request->category_id,
            'district_id'   => $request->district_id,
            'upazila_id'    => $request->upazila_id,
            'company_name'  => $request->company_name,
            'description'   => $request->description,
            'salary_from'   => $request->salary_from,
            'salary_to'     => $request->salary_to,
            'featured_post' => $request->featured_post,
            'status'        => $request->status,
            'job_type'      => $request->job_type,
            'end_date'      => $request->end_date,
            'post_position' => $request->post_position,
        ];



        // upload image
        $destinationPath = public_path('uploads/post/company_logo');

        // check directory is exists
        if (!is_dir($destinationPath)) {
            if (!mkdir($destinationPath, 0777, true)) {
                die('Failed to create folders...');
            }
        }

        if ($file = $request->file('company_logo')) {

            // check file exists delete data
            if (!empty($request->old_company_logo)){
                if (file_exists($request->old_company_logo)){
                    unlink($request->old_company_logo);
                }
            }

            $image_name = preg_replace('/[^A-Za-z0-9\-]/', '-', str_replace(' ', '-', $file->getClientOriginalName()));

            $image_name      = $image_name . '-' . date('YmdHmi') . '.' . $file->getClientOriginalExtension();
            $destinationPath = public_path('uploads/post/company_logo');
            $file->move($destinationPath, $image_name);
            $data['company_logo'] = 'public/uploads/post/company_logo/' . $image_name;
        }

        Post::where('id', $request->id)->update($data);

        return redirect()->route('post')->with('update', 'Post successfully updated.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Post::find($id)->delete();

        return redirect()->back()->with('delete', 'Post successfully deleted.');
    }
}
