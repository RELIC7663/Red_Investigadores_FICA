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
        Schema::create('lineas_investigacion', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->id();
            $table->string('nombre');
            $table->text('descripcion');
            $table->unsignedBigInteger('area_investigacion_id');
            $table->foreign('area_investigacion_id')
                  ->references('id')->on('areas_investigacion')
                  ->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('lineas_investigacion');
    }
};
