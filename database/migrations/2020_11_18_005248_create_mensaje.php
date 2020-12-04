<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMensaje extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       Schema::create('mensaje', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('asunto')->nullable();
            $table->string('problema')->nullable();     
            $table->string('email')->unique('');
            $table->integer('status')->default(0);
            $table->rememberToken();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('mensaje');
    }
}
