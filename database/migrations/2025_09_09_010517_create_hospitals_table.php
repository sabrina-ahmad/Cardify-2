<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('hospitals', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('hospital_name');
            $table->string('license_number')->unique();
            $table->string('contact_person');
            $table->string('phone_number')->nullable();
            $table->string('email')->unique();
            $table->string('password');
            $table->boolean('verified')->default(false);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('hospitals');
    }
};
