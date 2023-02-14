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
        Schema::create('gr_parking_spaces', function (Blueprint $table) {
            $table->increments('id');
            $table->string('es_street')->nullable();
            $table->string('es_zone')->nullable();
            $table->text('es_description')->nullable();
            $table->string('photo_path')->nullable();
            $table->string('vahical_type')->nullable();
            $table->enum('duration',['Corta','Media','Larga'])->default('Corta');
            $table->string('price')->nullable();
            $table->string('largo')->nullable();
            $table->string('ancho')->nullable();
            $table->string('altura_min')->nullable();
            $table->boolean('disabled_access')->nullable();
            $table->boolean('housekeeping')->nullable();
            $table->boolean('security_personnel')->nullable();
            $table->boolean('automatic_door')->nullable();
            $table->boolean('security_cameras')->nullable();
            $table->boolean('gate_electric_charger')->nullable();
            $table->boolean('status')->default(true);
            $table->string('planta')->nullable();
            $table->string('n_plaza')->nullable();
            $table->string('codigo_postel')->nullable();
            $table->string('fianza')->nullable();
            $table->enum('is_publish',['pending','publish'])->default('pending');
            $table->timestamp('time_make_3d_video')->nullable();
            $table->integer('user_id')->unsigned()->nullable();
            $table->foreign('user_id')
                    ->references('id')
                    ->on('users')
                    ->onDelete('cascade');
            $table->softDeletes();
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
        Schema::dropIfExists('gr_parking_spaces');
    }
};
