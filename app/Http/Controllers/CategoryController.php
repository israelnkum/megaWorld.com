<?php

namespace App\Http\Controllers;

use App\Category;
use App\SubCategory;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('categories.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $bodyCare=SubCategory::where('category_id',1)->get();
        $homeCare=SubCategory::where('category_id',3)->get();
        return view('categories.create')
            ->with('bodyCare',$bodyCare)
            ->with('homeCare',$homeCare);
    }

    public function welcome(){
        $bodyCare=SubCategory::where('category_id',1)->get();
        $laundryLine=SubCategory::where('category_id',2)->get();
        $homeCare=SubCategory::where('category_id',3)->get();
        $cleaningLine=SubCategory::where('category_id',4)->get();
        return view('welcome')
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
        $category = new Category();
        $category->name = $request->input('name');
        if ($category->save()){
            $bodyCare=SubCategory::where('category_id',1)->get();
            $homeCare=SubCategory::where('category_id',3)->get();
            $cleaningLine=SubCategory::where('category_id',4)->get();
            return view('/categories.create')
                ->with('bodyCare',$bodyCare)
                ->with('homeCare',$homeCare)
                ->with('cleaningLine',$cleaningLine);
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
