<?php

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
            $table->string('productCode');
            $table->string('slug');
            $table->string('productName');
            $table->string('productScale');
            $table->string('productVendor');
            $table->text('productDescription');
            $table->tinyInteger('quantityInStock');
            $table->decimal('buyPrice', 10,2); 
            $table->decimal('MSRP', 10,2);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('products');
    }
}
