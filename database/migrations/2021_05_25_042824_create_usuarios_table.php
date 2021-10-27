<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsuariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usuarios', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->id();

            $table->string('firstname', 50);
            $table->string('lastname', 50);
            $table->string('second_lastname', 50);
            $table->integer('cellphone');
            $table->string('address', 50);
            $table->string('ct_person_name', 50);
            $table->string('ct_person_lastname', 50);

            $table->foreignId('administradores_id')
                ->constrained('administradores')
                ->onDelete('cascade');

            // $table->unsignedBigInteger('administradores_id')->unsigned();

            // $table->foreign('administradores_id')
            //     ->references('id')->on('administradores')
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
        Schema::dropIfExists('usuarios');
    }
}