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
        Schema::create('job_forms', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('country');
            $table->string('email');
            $table->string('password',8);
            $table->string('date');
            $table->string('qualification');
            $table->string('address');
            $table->integer('postcode');
            $table->string('state');
            $table->string('city');
            $table->string('experience');
            $table->string('hobby');
            $table->integer('phone');
            $table->string('radio');
            $table->string('image');
            $table->string('ticket');
            $table->string('status');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('job_forms');
    }
};
