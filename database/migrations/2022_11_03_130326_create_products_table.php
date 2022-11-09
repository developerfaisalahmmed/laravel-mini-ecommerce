<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
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
            $table->string('title');
            $table->string('slug');
            $table->float('price')->default('100.50');
            $table->integer('quantity')->default('0');
            $table->integer('discount_type')->default('1');
            $table->integer('discount')->default('0');
            $table->float('selling_price')->default('100.50');
            $table->json('image')->nullable();
            $table->longText('description');
            $table->integer('status')->default('1')->comment('product will active or in active, 0 = inactive, 1 = active');
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
};
