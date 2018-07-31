<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMakeForeignKeyTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('products', function (Blueprint $table) {
            $table->foreign('category_id')->references('id')->on('categoris')->change();
            $table->foreign('brand_id')->references('id')->on('brands')->change();
            $table->foreign('warranty_period_id')->references('id')->on('warrany_periods')->change();
        });

        Schema::table('list_images', function(Blueprint $table)
        {
            $table->foreign('product_id')->references('id')->on('products')->change();
        });

        Schema::table('product_atts', function(Blueprint $table)
        {
            $table->foreign('product_id')->references('id')->on('products')->change();
            $table->foreign('attribute_id')->references('id')->on('attributes')->change();
        });


        Schema::table('rates', function(Blueprint $table)
        {
            $table->foreign('product_id')->references('id')->on('products')->change();
            $table->foreign('user_id')->references('id')->on('users')->change();
        });

        Schema::table('comments', function(Blueprint $table)
        {
            $table->foreign('product_id')->references('id')->on('products')->change();
            $table->foreign('user_id')->references('id')->on('users')->change();
        });

        Schema::table('orders', function(Blueprint $table)
        {
            $table->foreign('user_id')->references('id')->on('users')->change();
            $table->foreign('pay_id')->references('id')->on('pays')->change();
            $table->foreign('ship_id')->references('id')->on('ships')->change();
        });

        Schema::table('order_details', function(Blueprint $table)
        {
            $table->foreign('order_id')->references('id')->on('orders')->change();
            $table->foreign('product_id')->references('id')->on('products')->change();
        });


    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        // 
    }
    
}
