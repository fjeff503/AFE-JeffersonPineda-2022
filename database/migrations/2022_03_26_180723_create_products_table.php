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
        Schema::create('suppliers', function (Blueprint $table) {
            $table->id();
            $table->string('supplierName');
            $table->string('address');
            $table->string('phoneNumber');
            $table->timestamps();
        });

        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('productName');
            $table->double('price', 8, 2);
            $table->integer('barcode');
            $table->foreignId('supplier_id')->references('id')->on('suppliers')->comment('Relacion con tabla suppliers');
            $table->foreignId('user_id')->references('id')->on('users')->comment('Relacion con tabla Usuarios');
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
        Schema::dropIfExists('suppliers');
        Schema::dropIfExists('products');
    }
};
