<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class EditTableProducts extends Migration
{
    public function up()
    {
        Schema::table('products', function (Blueprint $table) {          
            $table->string('image1',255);
            $table->string('image2',255);
            $table->string('image3',255);
           
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('products', function (Blueprint $table) {
            //
        });
    }
}
