<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Metadata;

class CategoryController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $metadata = Metadata::all();
        // 
        return view('portal.category.index2',compact('metadata'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('portal.category.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request,Metadata $metadata)
    {
        //

        //echo $request->title;
        $metadata->metadata = $request->metadata;
        $metadata->metadata_description= $request->metadatadescription;
        $metadata->save();
        return redirect()->back();
        //return redirect()->action('CategoryController@index');

        //return redirect('portal.category.index2');
        //return redirect('portal.category.index');
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
    public function edit(Metadata $metadata)
    {
        //
        //echo $category->id;
        //echo $category->title;

        $arr['metadata']= $metadata;
        return view('portal.category.edit')->with($arr);
    }
    

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,Metadata $metadata)
    {
        //
        $metadata->metadata = $request->metadata;
        $metadata->metadata_description= $request->metadatadescription;
        $metadata->save();
        /*
        $category->title = $request->title;
        $category->save();
        $arr['categories'] = Category::all();
        return redirect('portal.category.index2')->with($arr);
        //->route('admin.category.index2');
        // -- using the ->route() for named routes 
        */
        return redirect()->action('CategoryController@index');

        
        //return redirect('portal.category.index');
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
