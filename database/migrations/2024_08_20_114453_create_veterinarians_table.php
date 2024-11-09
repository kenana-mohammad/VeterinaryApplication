<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('veterinarians', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('certificate_image');
            $table->string('photo')->nullable();
            $table->string('experience_certificate_image')->nullable();
            $table->string('Specialization')->nullable();
            $table->string('phone_number');
            $table->string('Address')->nullable();
            $table->enum('role',['veterinarian']);
            $table->rememberToken();
            $table->string('email')->unique();
            $table->string('password');
            $table->boolean('is_approved')->default(false);
            $table->string('confirm_password');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('veterinarians');
    }
};
