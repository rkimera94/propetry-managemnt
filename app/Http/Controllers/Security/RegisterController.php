<?php

namespace App\Http\Controllers\Security;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Sentinel;
use App\Models\Roles\RoleModel;

class RegisterController extends Controller
{
    //

    public function register(){
        return view('security.register');
        
    }


    public function registeruser(Requst $request){
        $user = Sentinel::registerAndActivate($request->all());
        echo ' user registered';


        dd($request);
        
    }






    // register 2
    public function register2(){
        $data['roles'] = RoleModel::get();
        return view('security.register2')->with('data',$data);
        
    }

    public function registeruser2(Request $request){
        // show the results dd($request->all());
        $data=$request->all();
        $roleID = $data['role'];
        echo $roleID;
        'exist';
        $user = Sentinel::registerAndActivate($request->all());
        echo 'user registered';

        $role = Sentinel::findRoleByID($roleID);
        $role->users()->attach($user);
        dd($request);

       
        
    }


}
