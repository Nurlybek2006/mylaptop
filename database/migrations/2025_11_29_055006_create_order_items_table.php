<?php
// database/migrations/2025_11_29_055006_create_order_items_table.php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('order_items', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('order_id')->nullable(); // Сыртқы кілтсіз
            $table->unsignedBigInteger('product_id')->nullable(); // Сыртқы кілтсіз
            $table->integer('quantity')->nullable();
            $table->decimal('price', 10, 2)->nullable();
        });
    }

    public function down()
    {
        Schema::dropIfExists('order_items');
    }
};