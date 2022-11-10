<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['categories'] = Category::all();


        $data['category_products'] = Category::with(['category_products'])->orderBy('id','DESC')->get()->map(function ($query) {
            $query->setRelation('category_products', $query->category_products->take(12));
            return $query;
        });

//        return $data['category_products'];

        return view('frontend.index',$data);

    }

    public function categoryProducts($slug)
    {

        $data['category_products'] = Category::with('category_products')->where('slug',$slug)->first();

//        return $data['category_products'];

        return view('frontend.category_products',$data);

    }

    public function productDetails($slug)
    {

        $data['product'] = Product::with('products_category')->where('slug',$slug)->first();

//        return $data['product'];

        return view('frontend.product_details',$data);

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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
