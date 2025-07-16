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
    Schema::create('logins', function (Blueprint $table) {
        $table->id();
        $table->string('name');
        $table->string('username')->unique();
        $table->string('email')->unique();
        $table->string('password');  // Laravel will automatically hash this
        $table->rememberToken();     // Add this for "remember me" functionality
        $table->timestamps();
    });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('logins');
    }
};
