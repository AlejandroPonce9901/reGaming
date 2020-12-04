<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDcompra extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dcompra', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_compr')->default(0);
            $table->unsignedBigInteger('id_producto')->default(0);
            //$table->string('name');
            //$table->date('fecha')->nullable();
            $table->integer('cantidad')->default(0);
            $table->decimal('precio',13,2)->default(0)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('dcompra');
    }
}
