<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\CategoryProduct;
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
        $categories = Category::all();
        return  view('backend.products.create',compact('categories'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreProductRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreProductRequest $request)
    {
        $validator = Validator::make($request->all(), [
            'title' => 'required',
            'price' => 'required',
            'description' => 'required',
            'category' => 'required',
            'image' => 'required',
            'image.*' => 'image|mimes:jpeg,png,jpg|max:2048',
        ]);

        if ($validator->fails()) {
            $notification = array(
                'message' => 'Opps! Something went wrong .Please Try Again.',
                'alert-type' => 'error'
            );
            return redirect()->back()->withErrors($validator)->withInput()->with($notification);
        } else {
            $input  = $request->all();

            if($request->hasfile('image'))
            {
                $i = 1;
                foreach($request->file('image') as $image)
                {
                    $product_image = $image;
                    $extension = $product_image->getClientOriginalExtension();
                    $product_name = "product_" . time() . $i++ . "." . $extension;
                    $image->move(public_path('uploads/product/'), $product_name);
                    $data[] = 'uploads/product/'.$product_name;
                }
            }

            $product =  Product::create([
                'title' => $input['title'],
                'slug' => Str::slug($request->title),
                'price' => $input['price'],
                'quantity' => $input['quantity'],
                'discount_type' => $input['discount_type'],
                'discount' => $input['discount'],
                'selling_price' => $input['selling_price'],
                'description' => $input['description'],
                'image' => json_encode($data),
            ]);


            //Product category
            $categories = $request->category;
            if (!empty($categories)) {
                foreach ($categories as $product_category) {
                    CategoryProduct::create([
                        'product_id' => $product->id,
                        'category_id' => $product_category
                    ]);
                }
            }

            $notification = array(
                'message' => 'The new category publish successfully',
                'alert-type' => 'success'
            );
            return redirect()->route('products.index')->with($notification);

        }
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

        $product->delete();
        if ($product){

            $get_product_images = json_decode($product->image);
            foreach ($get_product_images as $get_product_image){
                if (file_exists($get_product_image)) {
                    @unlink($get_product_image);
                }
            }

            $notification = array(
                'message' => 'The Product has been deleted successfully',
                'alert-type' => 'success'
            );

            return redirect()->route('products.index')->with($notification);
        }


    }
}
