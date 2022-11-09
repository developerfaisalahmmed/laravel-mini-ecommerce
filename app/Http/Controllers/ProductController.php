<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Http\Requests\StoreProductRequest;
use App\Http\Requests\UpdateProductRequest;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::with('products_category')->orderBy('id','DESC')->get();
//        return $products;
        return  view('backend.products.index',compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return  view('backend.products.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreProductRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreProductRequest $request)
    {
//        $validator = Validator::make($request->all(), [
//            'title' => 'required',
//            'price' => 'required',
//            'description' => 'required',
//            'image' => 'mimes:jpeg,png,jpg,gif,svg|max:2048',
//        ]);
//
//        if ($validator->fails()) {
//            $notification = array(
//                'message' => 'Opps! Something went wrong .Please Try Again.',
//                'alert-type' => 'error'
//            );
//            return redirect()->back()->withErrors($validator)->withInput()->with($notification);
//        } else {
            $input  = $request->all();

            if($request->hasfile('image'))
            {
                foreach($request->file('image') as $image)
                {
                    $product_image = $image;
                    $extension = $product_image->getClientOriginalExtension();
                    $product_name = "product_" . time() . "." . $extension;
                    $image->move(public_path('uploads/product/'), $product_name);
                    $data[] = 'uploads/product/'.$product_name;
                }
            }

            $input['image'] = json_encode($data);
            $input['slug'] = Str::slug($request->title);

            Product::create($input);
            $notification = array(
                'message' => 'The new category publish successfully',
                'alert-type' => 'success'
            );
            return redirect()->route('categories.index')->with($notification);
//
//        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateProductRequest  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateProductRequest $request, Product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        //
    }
}
