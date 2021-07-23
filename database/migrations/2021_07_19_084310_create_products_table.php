<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('brand');
            $table->integer('size');
            $table->integer('hell_height')->nullable();
            $table->float('price');
            $table->string('images')->nullable();
            $table->unsignedBigInteger('category_id')->nullable(false);
            $table->unsignedBigInteger('user_id')->nullable(false);
            $table->string('designer');
            $table->string('status')->nullable('false');
            $table->timestamps();
        });
        Schema::table('products', function($table) {
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
}
