<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Dventa extends Migration
{
    
    public function up()
    {
        Schema::create('dventa', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_venta')->default(0);
            $table->unsignedBigInteger('id_producto')->default(0);
            //$table->string('name');
            //$table->date('fecha')->nullable();
            $table->integer('cantidad')->default(0);
            $table->decimal('precio',13,2)->default(0)->nullable();
            $table->timestamps();
        });
    }

   
    public function down()
    {
        Schema::dropIfExists('dventa');
    }
}
