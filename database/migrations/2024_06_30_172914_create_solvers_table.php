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
        Schema::create('solvers', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->string('password');
            $table->string('school')->nullable();
            $table->string('avatar');
            $table->unsignedBigInteger('district_id');
            $table->unsignedBigInteger('upozilla_id');
            $table->foreign('district_id')->references('id')->on('districts');
            $table->foreign('upozilla_id')->references('id')->on('upozillas');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('solvers');
    }
};
