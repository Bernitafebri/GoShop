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
            $table->id();
            $table->string('name');
            $table->string('image');
            $table->bigInteger('categories_id')->unsigned();
            $table->float('price');
            $table->text('description');
            $table->enum('status', ['ready','sold'])->default('ready');
            $table->enum('show', ['ya','tidak'])->default('ya');
            $table->timestamps();
        });
        Schema::table('products', function (Blueprint $table) {
            $table->foreign('categories_id')->references('id')->on('categories')->onDelete('cascade');
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
