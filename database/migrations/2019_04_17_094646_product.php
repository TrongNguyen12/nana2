<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Product extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('slug');
            $table->integer('price')->nullable();
            $table->integer('price_promotion')->nullable();
            $table->integer('sale')->nullable();
            $table->integer('brand_id')->nullable();
            $table->dateTime('end_datetime_sale')->nullable();
            $table->dateTime('begin_datetime_sale')->nullable();
            $table->text('image')->nullable();
            $table->text('more_image')->nullable();
            $table->text('option')->nullable();
            $table->integer('storage')->nullable();
            $table->text('content_short')->nullable();
            $table->text('content_main')->nullable();
            $table->integer('status')->nullable();
            $table->string('meta_title')->nullable();
            $table->text('meta_description')->nullable();
            $table->string('meta_keyword')->nullable();
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
        Schema::dropIfExists('product');
    }
}
