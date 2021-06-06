<?php

namespace App\Http\Controllers\backend\admin;

use App\Brand;
use App\Category;
use App\Product;
use App\Product_image;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Image;

class ProductController extends Controller
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
        // get all category
        $data['allCategory'] = Category::all();

        // get all brand
        $data['allBrand'] = Brand::all();

        // get all product
        $data['allProduct'] = Product::with('category', 'subcategory', 'brand', 'image')->get();


        return view('backend.admin.product.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // get all category
        $data['allCategory'] = Category::all();

        // get all brand
        $data['allBrand'] = Brand::all();

        $data['position'] = count(Product::all()) + 1;


        return view('backend.admin.product.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         
         // save product info and return insert data
         $data = Product::create($request->all());
         
         // upload image
        $destinationPathSmall = public_path('uploads/products/small');
        $destinationPathMedium = public_path('uploads/products/medium');
        $destinationPathLarge = public_path('uploads/products/large');

        // check directory is exists
        if (!is_dir($destinationPathSmall)) {
            if (!mkdir($destinationPathSmall, 0777, true)) {
                die('Failed to create folders...');
            }
        }

        if(!is_dir($destinationPathMedium)){
             if (!mkdir($destinationPathMedium, 0777, true)) {
                die('Failed to create folders...');
            }
        }

        if(!is_dir($destinationPathLarge)){
             if (!mkdir($destinationPathLarge, 0777, true)) {
                die('Failed to create folders...');
            }
        }


        if ($file = $request->file('photo')) {

            foreach ($file as $key => $value) {

                $image_name = preg_replace('/[^A-Za-z0-9\-]/', '-', str_replace(' ', '-', $value->getClientOriginalName())) . '-' . floor(microtime(true)) . '.' . $value->getClientOriginalExtension();

               
                $ImageUpload = Image::make($value);

                // large image
                $ImageUpload->resize(700, 700, function ($constraint) {
                    $constraint->aspectRatio();
                    $constraint->upsize();
                });
                $ImageUpload->save($destinationPathLarge.'/'.$image_name, 70);

                // medium image
                $ImageUpload->resize(400, 400, function ($constraint) {
                    $constraint->aspectRatio();
                    $constraint->upsize();
                });
                $ImageUpload->save($destinationPathMedium.'/'.$image_name, 80);

                // small image
                $ImageUpload->resize(250, 250, function ($constraint) {
                    $constraint->aspectRatio();
                    $constraint->upsize();
                });
                $ImageUpload->save($destinationPathSmall.'/'.$image_name);


                // save product images
                Product_image::create([
                    'product_id' => $data->id,
                    'small'      => 'public/uploads/products/small/'.$image_name,
                    'medium'     => 'public/uploads/products/medium/'.$image_name,
                    'large'      => 'public/uploads/products/large/'.$image_name,
                ]);
            }
        }


        return redirect()->route('admin.product')->with('success', 'Product successfully added.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // get product info
        $data['info'] = Product::with('category', 'subcategory', 'brand', 'images')->where('id', $id)->first();

        return view('backend.admin.product.show', $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // get all category
        $data['allCategory'] = Category::all();

        // get all brand
        $data['allBrand'] = Brand::all();


        // get product info
        $data['info'] = Product::with('category', 'subcategory', 'brand', 'images')->where('id', $id)->first();


        return view('backend.admin.product.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        // save product info and return insert data
        Product::where('id', $id)->update($request->except('_token', 'photo'));
         
         // upload image
        $destinationPathSmall = public_path('uploads/products/small');
        $destinationPathMedium = public_path('uploads/products/medium');
        $destinationPathLarge = public_path('uploads/products/large');

        // check directory is exists
        if (!is_dir($destinationPathSmall)) {
            if (!mkdir($destinationPathSmall, 0777, true)) {
                die('Failed to create folders...');
            }
        }

        if(!is_dir($destinationPathMedium)){
             if (!mkdir($destinationPathMedium, 0777, true)) {
                die('Failed to create folders...');
            }
        }

        if(!is_dir($destinationPathLarge)){
             if (!mkdir($destinationPathLarge, 0777, true)) {
                die('Failed to create folders...');
            }
        }


        if ($file = $request->file('photo')) {

            foreach ($file as $key => $value) {

                $image_name = preg_replace('/[^A-Za-z0-9\-]/', '-', str_replace(' ', '-', $value->getClientOriginalName())) . '-' . floor(microtime(true)) . '.' . $value->getClientOriginalExtension();

               
                $ImageUpload = Image::make($value);

                // large image
                $ImageUpload->resize(700, 700, function ($constraint) {
                    $constraint->aspectRatio();
                    $constraint->upsize();
                });
                $ImageUpload->save($destinationPathLarge.'/'.$image_name, 70);

                // medium image
                $ImageUpload->resize(400, 400, function ($constraint) {
                    $constraint->aspectRatio();
                    $constraint->upsize();
                });
                $ImageUpload->save($destinationPathMedium.'/'.$image_name, 80);

                // small image
                $ImageUpload->resize(250, 250, function ($constraint) {
                    $constraint->aspectRatio();
                    $constraint->upsize();
                });
                $ImageUpload->save($destinationPathSmall.'/'.$image_name);


                // save product images
                Product_image::create([
                    'product_id' => $id,
                    'small'      => 'public/uploads/products/small/'.$image_name,
                    'medium'     => 'public/uploads/products/medium/'.$image_name,
                    'large'      => 'public/uploads/products/large/'.$image_name,
                ]);
            }
        }


        return redirect()->route('admin.product')->with('success', 'Product successfully added.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Product::find($id)->delete();

        return redirect()->back()->with('delete', 'Product successfully deleted.');
    }

    public function destroy_image(Request $request)
    {
        Product_image::find($request->id)->delete();

        return json_encode('success');
    }
}
