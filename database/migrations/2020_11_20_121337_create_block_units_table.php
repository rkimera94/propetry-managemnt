<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use phpDocumentor\Reflection\Types\True_;

class CreateBlockUnitsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('block_units', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('property_id');
            $table->bigInteger('block_id');
            $table->string('unit_code')->unique();
            // business, residential property 
            $table->bigInteger('unit_category');
            // self contained
            $table->bigInteger('unit_type');
            $table->integer('number_of_rooms');
            $table->boolean('has_kitchen_space')->default(true);
            $table->timestamps();


            $table->foreign('property_id')->references('id')->on('property')->onUpdate('cascade');
            $table->foreign('block_id')->references('id')->on('property_blocks')->onUpdate('cascade');

            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('block_units');
    }
}
