<?php

namespace App;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;


class Metadata extends Model
{
    //

        //

    

    // raw qyuery building 

    public function insert1(){

        $date = new \Datetime();
        //$unixTimeStamp = $date->getTimeStampe();

        DB::connection('psql')->insert('insert into metadata 
        (metadata,metadata_description)
        values(?,?)',
        ['test1','test1']);

    }


    public function insert2(){
        DB::insert('insert into metadata(metadata,metadata_description)
        values(?,?)',
        ['test1','test1']

        );

    }
}
