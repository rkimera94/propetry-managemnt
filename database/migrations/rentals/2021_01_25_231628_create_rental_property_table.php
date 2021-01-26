<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRentalPropertyTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rental_property', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('property_id');
            $table->string('rental_name');
            $table->double('price');
            $table->string('currency');
            $table->string('rental_status')->default('NOT OCCUPIED');
            $table->bigInteger('created_by_id')->unsigned()->nullable();

            $table->timestamps();
        
            $table->foreign('property_id')->references('id')->on('property')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('rental_property');
    }
}
