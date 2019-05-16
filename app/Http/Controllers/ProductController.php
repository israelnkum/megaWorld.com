<?php

namespace App\Http\Controllers;

use App\Brand;
use App\Category;
use App\Product;
use App\SubCategory;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $bodyCare=SubCategory::where('category_id',1)->get();
        $laundryLine=SubCategory::where('category_id',2)->get();
        $homeCare=SubCategory::where('category_id',3)->get();
        $cleaningLine=SubCategory::where('category_id',4)->get();
        $subCategory = SubCategory::all();
        $brandName = Brand::all();
        return view('products.create')
            ->with('subCategory',$subCategory)
            ->with('bodyCare',$bodyCare)
            ->with('homeCare',$homeCare)
            ->with('brandName',$brandName)
            ->with('cleaningLine',$cleaningLine)
            ->with('laundryLine',$laundryLine);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $product = new Product();
        $product->name = $request->input('name');
        $product->sub_category_id = $request->input('sub_category_id');
        $product->brand_id = $request->input('brand_id');

        if ($product->save()){
            $bodyCare=SubCategory::where('category_id',1)->get();
            $laundryLine=SubCategory::where('category_id',2)->get();
            $homeCare=SubCategory::where('category_id',3)->get();
            $cleaningLine=SubCategory::where('category_id',4)->get();
            $subCategory = SubCategory::all();
            $brandName = Brand::all();
            return view('products.create')
                ->with('subCategory',$subCategory)
                ->with('bodyCare',$bodyCare)
                ->with('homeCare',$homeCare)
                ->with('brandName',$brandName)
                ->with('cleaningLine',$cleaningLine)
                ->with('laundryLine',$laundryLine);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function show($id)
    {
        $products = Product::with('sub_category')->where('id',$id)->get();
//        return $products;
        $bodyCare=SubCategory::where('category_id',1)->get();
        $laundryLine=SubCategory::where('category_id',2)->get();
        $homeCare=SubCategory::where('category_id',3)->get();
        $cleaningLine=SubCategory::where('category_id',4)->get();
        return view('products.show-single')
            ->with('bodyCare',$bodyCare)
            ->with('homeCare',$homeCare)
            ->with('products',$products)
            ->with('cleaningLine',$cleaningLine)
            ->with('laundryLine',$laundryLine);
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
