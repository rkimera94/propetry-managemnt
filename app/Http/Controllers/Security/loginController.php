<?php

namespace App\Http\Controllers\Security;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

// import dependencies
use Sentinel;
use Validator;
use Cartalyst\Sentinel\Checkpoints\ThrottlingException;
use Cartalyst\Sentinel\Checkpoints\NotActivatedException;
// model 
use App\Property;




class loginController extends Controller
{
    //
    public function login(){
        return view('security.login');

    }

    public function login2(){
        if(Sentinel::check()){
            return redirect(url('/'));
        }
        return view('security.login2');
    }

    public function postlogin(Request $request){
        Sentinel::disableCheckpoints();

        // the error messages
        $errorMsgs =[
            'email.required'=> 'please provide an email',
            'email.email'=>'the email must be a vaild email',
            'password.required'=>'password is required'

        ];
        // manually creating a new validator instance
        $validator = Validator::make($request->all(),[
            'email'=>'required|email',
            'password'=>'required'


        ],$errorMsgs);

        // if the validator fails 
        if($validator->fails()){
            $returnData = array(
                'status'=>'error',
                'message'=>'please review fields',
                'errors'=> $validator->errors()->all()
            );

            return response()->json($returnData, 500);


        }

        // if the validatpr is successful 
        if($request->remember=='on'){
            try{
                $user = Sentinel::authenticateAndRemember($request->all());

            }catch(ThrottlingException $e){
                $delay=$e->getDelay();
                $returnData= array(
                    'status'=>'error',
                    'message'=>'please review ',
                    'errors'=> ["you are banned for $delay seconds."]
                );return response()->json($returnData, 500);


            }catch(NotActivatedException $e){
                $returnData= array(
                    'status'=>'error',
                    'message'=>'please review ',
                    'errors'=> ["please activate ur accoutn"]
                );
                return response()->json($returnData, 500);


            }
        }else{
            try{
                $user = Sentinel::authenticate($request->all());

            }catch(ThrottlingException $e){
                $delay=$e->getDelay();
                $returnData= array(
                    'status'=>'error',
                    'message'=>'please review ',
                    'errors'=> ["you are banned for $delay seconds."]
                );return response()->json($returnData, 500);


            }catch(NotActivatedException $e){
                $returnData= array(
                    'status'=>'error',
                    'message'=>'please review ',
                    'errors'=> ["please activate ur accoutn"]
                );
                return response()->json($returnData, 500);


            }

        }

        if(Sentinel::check()){
            $arr['property'] = Property::all();
            //return redirect(url('portal.category.index2'))->with($arr);
            //return redirect('/');
            return redirect('/admin/dataportal/property');
        }else{
            $returnData= array(
                'status'=>'error',
                'message'=>'please review ',
                'errors'=> ["email or password mismatched"]
            );
            return response()->json($returnData, 500);
        }









        dd($request->all());
        //return view('security.login2');
    }





    /**
     * 
     * logout method
     * 
     */

     public function logout(){
         Sentinel::logout();
         return redirect(url('/login2'));
     }




    




    
}
