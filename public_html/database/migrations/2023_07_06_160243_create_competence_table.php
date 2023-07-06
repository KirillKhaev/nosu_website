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
        Schema::create('competence', function (Blueprint $table) {
            $table->id();
            $table->string('code', 255);
            $table->text('description');
            $table->unsignedBigInteger('speciality_id');
            $table->timestamps();

            $table->foreign('speciality_id')->references('id')->on('speciality');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('competence');
    }
};
