<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;


class Property extends Model
{
    //

    protected $table = 'property';
    protected $primarykey = 'id';

    

    // raw qyuery building 

    public function insert1(){

        $date = new \Datetime();
        //$unixTimeStamp = $date->getTimeStampe();

        DB::connection('psql')->insert('insert into property 
        (property_title,property_type,number_rental_spaces,rental_space_description,Address_1,Address_2,Address_3,village)
        values(?,?,?,?,?,?,?,?)',
        ['test1','test1',1,2,3,4,5,6]);

    }


    public function insert2(){
        DB::insert('insert into property(property_title,property_type,number_rental_spaces,rental_space_description,Address_1,Address_2,Address_3,village)
        values(?,?,?,?,?,?,?,?)',
        ['test1','test1',1,2,3,4,5,6]

        );

    }
}
