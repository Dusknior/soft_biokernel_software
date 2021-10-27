<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdministradoresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('administradores', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->id();

            $table->string('hospital_name', 50);
            $table->string('hospital_address', 100);
            $table->string('hospital_admin_name', 50);
            $table->string('hospital_admin_lastname', 50);
            $table->integer('hospital_nit');

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
        Schema::dropIfExists('administradores');
    }
}