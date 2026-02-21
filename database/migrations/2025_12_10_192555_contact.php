<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {

        Schema::create('contacts', function (Blueprint $table) {
            $table->id();
            $table->string('address');
            $table->timestamps();
        });

        Schema::create('contact_emails', function (Blueprint $table) {
            $table->id();
            $table->foreignId('contact_id')->constrained()->onDelete('cascade');
            $table->string('email');
            $table->timestamps();
        });

        Schema::create('contact_numbers', function (Blueprint $table) {
            $table->id();
            $table->foreignId('contact_id')->constrained()->onDelete('cascade');
            $table->string('number');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('contact_numbers');
        Schema::dropIfExists('contact_emails');
        Schema::dropIfExists('contacts');
    }
};
