<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
  
    public function up()
    {
        Schema::create('fotografit', function (Blueprint $table) {
            $table->id();
            $table->string("Fotografia_umfa");
            $table->string("Fotografi_umfa");
            $table->string("Kategoria_eFotografise_umfa");
     
        });
    }


    public function down()
    {
        Schema::dropIfExists('fotografit');
    }
};