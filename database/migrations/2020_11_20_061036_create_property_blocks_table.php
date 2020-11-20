<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePropertyBlocksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('property_blocks', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('property_id');
            $table->string('block_code');
            $table->string('block_title');
            $table->integer('number_of_units');
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
        Schema::dropIfExists('property_blocks');
    }
}
