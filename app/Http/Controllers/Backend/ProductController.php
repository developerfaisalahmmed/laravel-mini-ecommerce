<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreProductRequest;
use App\Models\Category;
use App\Models\CategoryProduct;
use App\Models\Product;
use App\Models\ProductImage;
use Illuminate\Support\Str;
use Intervention\Image\Facades\Image;

class ProductController extends Controller
{

    function __construct()
    {
        $this->middleware('permission:dashboard');

        $this->middleware('permission:product-list|product-create|product-show|product-edit|product-delete', ['only' => ['index', 'store']]);
        $this->middleware('permission:product-show', ['only' => ['show']]);
        $this->middleware('permission:product-create', ['only' => ['create', 'store']]);
        $this->middleware('permission:product-edit', ['only' => ['edit', 'update']]);
        $this->middleware('permission:product-delete', ['only' => ['destroy']]);
    }

    public function index()
    {
        $products = Product::with('categories')->orderBy('id','DESC')->get();
//        return $products;

        return view('backend.products.index', compact('products'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        return view('backend.products.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreProductRequest $request)
    {
        $validateData = $request->all();
//                $category = Category::findOrFail($validateData['category_id']);
        $product = Product::create([
//                    'category_id' => $validateData['category_id'],
            'title' => $validateData['title'],
            'slug' => Str::slug($validateData['title']),
            'price' => $validateData['price'],
            'quantity' => $validateData['quantity'],
            'discount_type' => $validateData['discount_type'],
            'discount' => $validateData['discount'],
            'selling_price' => $validateData['selling_price'],
            'description' => $validateData['description'],
        ]);


        if ($request->hasfile('image')) {
            $i = 1;
            foreach ($request->file('image') as $image) {
                $product_image = $image;
                $extension = $product_image->getClientOriginalExtension();
                $product_name = "product_" . time() . $i++ . "." . $extension;
                Image::make($product_image)->resize(700, 500)->save(public_path().'/uploads/product/'.$product_name);
//                $image->move(public_path('uploads/product/'), $product_name);
                $all_image_name = 'uploads/product/' . $product_name;
                $product->productImages()->create([
                    'product_id' => $product->id,
                    'image' => $all_image_name,
                ]);
            }
        }

        $categories = $request->category_id;
        if ($categories) {
            foreach ($categories as $category) {
                $product->categoryProduct()->create([
                    'product_id' => $product->id,
                    'category_id' => $category,
                ]);
            }
        }

        return redirect()->route('products.index');

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
        $categories = Category::all();
        $product = Product::findOrFail($id);
        return view('backend.products.edit', compact('categories', 'product'));
    }


    public function productImageEdit($id)
    {
        $productImage = ProductImage::findOrFail($id);
        $productImage->delete();
        if ($productImage) {
            $image_path = public_path($productImage->image);
            if (file_exists($image_path)) {
                @unlink($image_path);
            }
        }
        return redirect()->back();
    }

    public function productCategoryEdit($id)
    {
//        return $id;

        $categoryProduct = CategoryProduct::where('category_id',$id)->first();
//        return $categoryProduct;
        $categoryProduct->delete();
        return redirect()->back();
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(StoreProductRequest $request, $id)
    {


        $validateData = $request->all();

        $product = Product::where('id', $id)->first();

        if ($product) {
            $product->update([
                'title' => $validateData['title'],
                'slug' => Str::slug($validateData['title']),
                'price' => $validateData['price'],
                'quantity' => $validateData['quantity'],
                'discount_type' => $validateData['discount_type'],
                'discount' => $validateData['discount'],
                'selling_price' => $validateData['selling_price'],
                'description' => $validateData['description'],
            ]);
        }

        if ($request->hasfile('image')) {
            $i = 1;
            foreach ($request->file('image') as $image) {
                $product_image = $image;
                $extension = $product_image->getClientOriginalExtension();
                $product_name = "product_" . time() . $i++ . "." . $extension;
//                $image->move(public_path('uploads/product/'), $product_name);
                Image::make($product_image)->resize(700, 500)->save(public_path().'/uploads/product/'.$product_name);

                $all_image_name = 'uploads/product/' . $product_name;
                $product->productImages()->create([
                    'product_id' => $product->id,
                    'image' => $all_image_name,
                ]);
            }
        }

        $categories = $request->category_id;
        if ($categories) {
            foreach ($categories as $category) {
                $product->categoryProduct()->create([
                    'product_id' => $product->id,
                    'category_id' => $category,
                ]);
            }
        }

        return redirect()->route('products.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
