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
        Schema::create('goal', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_match');
            $table->unsignedBigInteger('id_user');
            $table->foreign('id_match')->references('id')->on(table:'match' );
            $table->foreign('id_user')->references('id')->on(table:'users' );
            $table->text('goal_time');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('goal');
    }
};
