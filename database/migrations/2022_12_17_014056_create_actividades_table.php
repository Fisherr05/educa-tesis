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
        Schema::create('actividades', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->unsignedBigInteger('id_nivel');
            $table->unsignedBigInteger('id_estado');
            $table->timestamps();
            $table->foreign('id_nivel')
                ->references('id')->on('niveles')
                ->onDelete('cascade')
                ->onUpdate('cascade');
            $table->foreign('id_estado')
                ->references('id')->on('estados')
                ->onDelete('cascade')
                ->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('actividades');
    }
};
