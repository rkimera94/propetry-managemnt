<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;


class DataController extends Controller
{
    //

    //Upload ad download files on the system


    //the get method
    public function importfile(){
        return view ('excel');

    }
    // the post method -- importdata
    public function importdata(Request $request){
        $validator = Validator::make($request->all(),[
            'file'=>'required|max:5000|mimes:xlsx,xls,csv'

        ]);

        if($validator->passes()){

            $dateTime = date('Ymd_His');
            $file = $request->file('file');
            $filename = $dateTime.'_'.$file->getClientOriginalName();
            $savePath = public_path('/upload/');
            $file->move($savePath,$filename);



            return redirect()->back()

                ->with(['success'=>'File uploaeded succesfully.']);
            
        }else{
            return redirect()->back()
                ->with(['errors'=>$validator->errors()->all()]);

        }




    }


    
    //to read excel files in laravel
    /*
    * we use cyber-duck/laracel-excel;;;;
   */







}
