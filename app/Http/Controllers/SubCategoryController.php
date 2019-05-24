<?php

namespace App\Http\Controllers;

use App\Category;
use App\Product;
use App\SubCategory;
use Illuminate\Http\Request;

class SubCategoryController extends Controller
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
        $categories=Category::all();

        return view('sub_categories.create')
            ->with('categories',$categories)
            ->with('bodyCare',$bodyCare)
            ->with('homeCare',$homeCare)
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
        $category = new SubCategory();
        $category->name = $request->input('name');
        $category->category_id = $request->input('category_id');


        if ($category->save()){
            $bodyCare=SubCategory::where('category_id',1)->get();
            $laundryLine=SubCategory::where('category_id',2)->get();
            $homeCare=SubCategory::where('category_id',3)->get();
            $cleaningLine=SubCategory::where('category_id',4)->get();
            $categories=Category::all();
            return view('/sub_categories.create')
                ->with('categories',$categories)
                ->with('bodyCare',$bodyCare)
                ->with('homeCare',$homeCare)
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
        $brandGroups = Product::with('sub_category')
            ->where('sub_category_id',$id)
            ->get()->groupBy('brand_id');


        $bodyCare=SubCategory::where('category_id',1)->get();
        $laundryLine=SubCategory::where('category_id',2)->get();
        $homeCare=SubCategory::where('category_id',3)->get();
        $cleaningLine=SubCategory::where('category_id',4)->get();
        return view('products.show')
            ->with('brandGroups',$brandGroups)
            ->with('bodyCare',$bodyCare)
            ->with('homeCare',$homeCare)
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

    public function solar_systems(){
        $bodyCare=SubCategory::where('category_id',1)->get();
        $laundryLine=SubCategory::where('category_id',2)->get();
        $homeCare=SubCategory::where('category_id',3)->get();
        $cleaningLine=SubCategory::where('category_id',4)->get();
        return view('solar_systems')
            ->with('bodyCare',$bodyCare)
            ->with('homeCare',$homeCare)
            ->with('cleaningLine',$cleaningLine)
            ->with('laundryLine',$laundryLine);
    }

    public function sumsung_services(){
        $bodyCare=SubCategory::where('category_id',1)->get();
        $laundryLine=SubCategory::where('category_id',2)->get();
        $homeCare=SubCategory::where('category_id',3)->get();
        $cleaningLine=SubCategory::where('category_id',4)->get();
        return view('services')
            ->with('bodyCare',$bodyCare)
            ->with('homeCare',$homeCare)
            ->with('cleaningLine',$cleaningLine)
            ->with('laundryLine',$laundryLine);
    }

    public function contact_us(){
        $bodyCare=SubCategory::where('category_id',1)->get();
        $laundryLine=SubCategory::where('category_id',2)->get();
        $homeCare=SubCategory::where('category_id',3)->get();
        $cleaningLine=SubCategory::where('category_id',4)->get();
        return view('contact_us')
            ->with('bodyCare',$bodyCare)
            ->with('homeCare',$homeCare)
            ->with('cleaningLine',$cleaningLine)
            ->with('laundryLine',$laundryLine);
    }



    public function about_us(){
        $bodyCare=SubCategory::where('category_id',1)->get();
        $laundryLine=SubCategory::where('category_id',2)->get();
        $homeCare=SubCategory::where('category_id',3)->get();
        $cleaningLine=SubCategory::where('category_id',4)->get();
        return view('about_us')
            ->with('bodyCare',$bodyCare)
            ->with('homeCare',$homeCare)
            ->with('cleaningLine',$cleaningLine)
            ->with('laundryLine',$laundryLine);
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
