<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePacientesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pacientes', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->id();

            $table->string('firstname', 50);
            $table->string('lastname', 50);
            $table->string('second_lastname', 50);
            $table->string('eps', 50);
            $table->string('address', 50);
            $table->string('companion_name', 50)->nullable();
            $table->string('companion_lastname', 50)->nullable();
            $table->integer('companion_cellphone')->nullable();
            $table->longText('medical_history')->nullable();
            $table->longText('reasons');
            $table->longText('diagnostic');

            $table->foreignId('usuarios_id')
                ->constrained('usuarios')
                ->onDelete('cascade');

            // $table->unsignedBigInteger('usuarios_id')->unique()->unsigned();

            // $table->foreign('usuarios_id')
            //     ->references('id')->on('usuarios')
            //     ->onDelete('cascade');

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
        Schema::dropIfExists('pacientes');
    }
}