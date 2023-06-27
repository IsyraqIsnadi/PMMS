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
            // $table->string('admin_id');
            $table->string('matric_id')->Constrained()->cascadeOnDelete()->nullable();
            $table->string('gender')->nullable();
            $table->string('phone_number')->nullable();
            $table->string('staff_id')->comment('for company purpose')->nullable();
            $table->date('dateEnter')->nullable();
            $table->integer('year')->nullable();
            $table->string('program')->nullable();
            $table->boolean('is_active')->nullable();
            $table->string('email')->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password')->nullable();
            $table->rememberToken()->nullable();
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
