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
        Schema::create('submissions', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('solver_id');
            $table->unsignedBigInteger('problemset_id');
            $table->unsignedBigInteger('correct_count')->default(0);
            $table->unsignedBigInteger('incorrect_count')->default(0);
            $table->dateTime('start_time');
            $table->timestamps();

            $table->foreign('solver_id')->references('id')->on('solvers');
            $table->foreign('problemset_id')->references('id')->on('problemsets');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('submissions');
    }
};
