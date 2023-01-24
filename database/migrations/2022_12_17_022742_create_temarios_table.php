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
        Schema::create('temarios', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->text('contenido')->nullable();
            $table->text('url_imagen')->nullable();
            $table->text('url_video')->nullable();
            $table->unsignedBigInteger('id_actividad');
            $table->unsignedBigInteger('id_estado');
            $table->timestamps();

            $table->foreign('id_actividad')
                ->references('id')->on('actividades')
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
        Schema::dropIfExists('temarios');
    }
};
