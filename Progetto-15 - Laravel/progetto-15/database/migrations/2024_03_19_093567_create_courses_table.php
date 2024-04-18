<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('courses', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('description');
            $table->foreignId('instructor_id');
            $table->foreign('instructor_id')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
            $table->string('room');
            $table->dateTime('start_date')->default(Carbon::now());
            $table->dateTime('end_date')->default(Carbon::now()->addDays(rand(30, 60)));
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('courses');
    }
};
