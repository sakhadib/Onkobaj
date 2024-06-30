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
        Schema::create('problemsets', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('level_id');
            $table->string('title');
            $table->string('description');
            $table->string('slug');
            $table->text('body');
            $table->text('css');
            $table->text('js');
            $table->text('imports');
            $table->integer('for_class');
            $table->timestamps();

            $table->foreign('level_id')->references('id')->on('levels');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('problemsets');
    }
};
