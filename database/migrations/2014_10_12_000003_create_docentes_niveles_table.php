<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('docente_nivel', function (Blueprint $table) {
            $table->id();
            $table->foreignId('docente_id');
            $table->foreign('docente_id')
                ->references('id')->on('docentes')
                ->onDelete('cascade')
                ->onUpdate('cascade');
            $table->foreignId('nivel_id');
            $table->foreign('nivel_id')
                ->references('id')->on('niveles')
                ->onDelete('cascade')
                ->onUpdate('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('docente_nivel');
    }
};
