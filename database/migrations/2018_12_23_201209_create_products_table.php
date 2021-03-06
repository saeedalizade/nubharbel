<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->increments('id');
            $table->integer('category_id')->unsigned();
            $table->foreign('category_id')->references('id')->on('category_product')->onUpdate('cascade')->onDelete('cascade');
            $table->string ('title',100);
            $table->string ('description');
            $table->text ('content');
            $table->integer ('count');
            $table->integer ('price');
            $table->integer('discount');
            $table->enum ('size',array('1','2','3','4','5','10','20'));
            $table->string ('img',100);
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
        Schema::dropIfExists('products');
    }
}
