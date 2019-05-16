<?php

namespace App\Http\Controllers;

use App\Brand;
use App\Product;
use App\SubCategory;
use Illuminate\Http\Request;

class BrandController extends Controller
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
        $cleaningLine=SubCategory::where('category_id',4)->get();
        $homeCare=SubCategory::where('category_id',3)->get();
        return view('brands.create')
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
        $brand = new Brand();
        $brand->name = $request->input('name');


        if ($brand->save()){
            $bodyCare=SubCategory::where('category_id',1)->get();
            $laundryLine=SubCategory::where('category_id',2)->get();
            $cleaningLine=SubCategory::where('category_id',4)->get();
            $homeCare=SubCategory::where('category_id',3)->get();
            $subCategory = SubCategory::all();
            return view('brands.create')
                ->with('subCategory',$subCategory)
                ->with('bodyCare',$bodyCare)
                ->with('homeCare',$homeCare)
                ->with('cleaningLine',$cleaningLine)
                ->with('laundryLine',$laundryLine);
        }
    }

    public function searchResult(Request $request){


        /*$data=Product::with('sub_category')
            ->where('name', $request->input("search"))
            ->orWhere('name', 'like', '%' . $request->input("search") . '%')
            ->get()->groupBy('sub_category_id');*/

        $data = SubCategory::with('products')
            ->Where('name', 'like', '%' . $request->input("search") . '%')
            ->get()->groupBy('name');

       /* foreach ($data as $products){

        }
*/
//        return $data;
        $bodyCare=SubCategory::where('category_id',1)->get();
        $laundryLine=SubCategory::where('category_id',2)->get();
        $cleaningLine=SubCategory::where('category_id',4)->get();
        $homeCare=SubCategory::where('category_id',3)->get();
        return view("search_result")
            ->with("data",$data)
            ->with('bodyCare',$bodyCare)
            ->with('homeCare',$homeCare)
            ->with('cleaningLine',$cleaningLine)
            ->with('laundryLine',$laundryLine);
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
