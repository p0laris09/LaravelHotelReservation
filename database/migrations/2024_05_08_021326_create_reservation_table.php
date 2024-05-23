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
        Schema::create('reservation', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('fn');
            $table->string('ln');
            $table->string('at');
            $table->string('dt');
            $table->string('email');
            $table->string('phone');
            $table->string('rp');
            $table->string('rc');
            $table->string('top');
            $table->integer('price');
            $table->integer('duration');
            $table->integer('discount');
            $table->integer('add_charge');
            $table->integer('total_cost');
            $table->string('status');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reservation');
    }
};
