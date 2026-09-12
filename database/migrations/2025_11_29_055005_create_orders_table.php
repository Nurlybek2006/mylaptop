<?php
// database/migrations/2025_11_29_055005_create_orders_table.php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->string('session_id', 255)->nullable();
            $table->string('stripe_payment_id', 255)->nullable();
            $table->unsignedBigInteger('product_id')->nullable(); // Сыртқы кілтсіз
            $table->string('product_name', 255)->nullable();
            $table->unsignedBigInteger('user_id')->nullable(); // Сыртқы кілтсіз
            $table->decimal('total_amount', 10, 2)->nullable();
            $table->decimal('shipping_cost', 10, 2)->default(0.00);
            $table->integer('quantity')->default(1);
            $table->string('status', 50)->default('pending');
            $table->string('payment_method', 50)->nullable();
            $table->text('shipping_address')->nullable();
            $table->string('phone', 20)->nullable();
            $table->string('customer_email', 255)->nullable();
            $table->string('customer_name', 255)->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('orders');
    }
};