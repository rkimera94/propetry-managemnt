<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Category;
use App\News;

class NewsController extends Controller
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
        $arr['news'] = News::all();
            
        return view('portal.news.index')->with($arr);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('portal.news.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, News $news)
    {
        // validation 
        $this->validate($request,[
            'title'=>'required',
            'author'=>'required'


        ]);




        if(isset($request->image) && $request->image->getClientOriginalName()){            
            $ext=$request->image->getClientOriginalExtension();
            $file= date('YmdHis').rand(1,99999).'.'.$ext;
            // uploading the file
            $request->image->storeAs('public/news',$file);
        }
        else{

            $file = '';

        }
        $news->image = $file;
        // uploaded files
        // for extenstion of the file getClientOriginalExtension()

        // other fields      
        $news->title = $request->title;
        $news->author = $request->author;
        $news->description = $request->description;
       
        $news->save();
        return redirect()->action('CategoryController@index')->with('success','news sumitted ... keep checkig the status of your blog, for commets ad retweets');


        /**
         * 
         * $news = new News; -- model
         * -- $title->title = $request->input('title')
         * input() -- to access form values
         * 
         * 
         */

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
    public function edit(News $news)
    {
        //
        $arr['news']= $news;
        return view('portal.news.edit')->with($arr);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, News $news)
    {
        //

        if(isset($request->image)&& $request->image->getClientOriginalName()){

            
            $ext=$request->image->getClientOriginalExtension();
            $file= date('YmdHis').rand(1,99999).'.'.$ext;
            // uploading the file
            $request->image->storeAs('public/news',$file);


        }
        else{
            if(!$news->image){
                $file='';

            }
            else{
                $file=$news->image;
            }

            

        }
        $news->image = $file;
        // uploaded files
        // for extenstion of the file getClientOriginalExtension()

        // other fields      
        $news->title = $request->title;
        $news->author = $request->author;
        $news->description = $request->description;
       
        $news->save();
        return redirect()->action('CategoryController@index');
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
