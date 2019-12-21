<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCustomersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customers', function (Blueprint $table) {
            $table->increments('customerNumber');
            $table->string('slug');
            $table->string('customerName');
            $table->string('contactLastName');
            $table->string('contactFirstName');
            $table->string('phone');
            $table->string('addressLine1');
            $table->string('addressLine2');
            $table->string('city');
            $table->string('state');
            $table->string('postalCode');
            $table->string('country');
            $table->decimal('creditLimit', 10,2); 
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('customers');
    }
}
