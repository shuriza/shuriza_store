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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('profile_picture');
            $table->rememberToken();

            // foreign key temporarily removed to ensure tbl_roles exists
            $table->bigInteger('role_id')->unsigned();

            $table->longText('about')->nullable();
            $table->longText('about_produk_text')->nullable();
            $table->string('about_produk_image')->nullable();
            $table->longText('about_petani_text')->nullable();
            $table->string('about_petani_image')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
