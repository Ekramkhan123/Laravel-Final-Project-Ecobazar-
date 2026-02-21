<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->foreignId('customer_id')->constrained()->onDelete('cascade');
           $table->string('fname');
            $table->string('lname');
            $table->string('company_name')->nullable();
            $table->string('street_address');
            $table->string('country');
            $table->string('state');
            $table->float('postcode');
            $table->string('email');
            $table->string('phone');
            $table->string('note')->nullable();
            $table->float('amount');
            $table->string('currency');
            $table->string('status')->default('pending');
            $table->string('transaction_id');
            $table->timestamps();
        });
    }

    public function down(): void {
        Schema::dropIfExists('orders');
    }
};