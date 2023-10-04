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
        Schema::create('blood_groups', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('donar_id');
            $table->string('blood-group');
            $table->integer('BP')->nullable();
            $table->float('hemoglobin')->nullable();
            $table->timestamps();
            $table->foreign('donar_id')->references('id')->on('donars');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('blood_groups');
    }
};
