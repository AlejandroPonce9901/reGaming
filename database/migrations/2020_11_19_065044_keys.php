<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Keys extends Migration
{
    
    public function up()
    {
        Schema::table('producto', function (Blueprint $table){
            
            $table->foreign('cproducto_id')->references('id')->on('cproducto');

        });
        
        Schema::table('dcompra', function (Blueprint $table){
            
            $table->foreign('id_producto')->references('id')->on('producto');
            $table->foreign('id_compr')->references('id')->on('compr');
        });

        Schema::table('compr', function (Blueprint $table){
            
            $table->foreign('id_proveedor')->references('id')->on('proveedor');

        });
        Schema::table('dventa', function (Blueprint $table){
            
            $table->foreign('id_producto')->references('id')->on('producto');
            $table->foreign('id_venta')->references('id')->on('venta');
        });
        Schema::table('venta', function (Blueprint $table){
            
            $table->foreign('id_clientes')->references('id')->on('clientes');

        });
    }

  
    public function down()
    {
        Schema::table('venta',function(Blueprint $table){
            $table->dropForeign(['id_clientes']);
        });
        Schema::table('dventa',function(Blueprint $table){
            $table->dropForeign(['id_venta']);
            $table->dropForeign(['id_producto']);
        });
        Schema::table('compr',function(Blueprint $table){
            $table->dropForeign(['id_proveedor']);
        });
        Schema::table('dcompra',function(Blueprint $table){
            $table->dropForeign(['id_compr']);
            $table->dropForeign(['id_producto']);
        });
        Schema::table('producto',function(Blueprint $table){
            $table->dropForeign(['cproducto_id']);
        });
    }
}
