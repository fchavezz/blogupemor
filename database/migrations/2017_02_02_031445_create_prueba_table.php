<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePruebaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_pruebas', function (Blueprint $table) {
            $table->increments();//id
            $table->string('namecat');//nombre
            $table->date('created_at');
            $table->date('updated_at');
            $table->integer('status');//status
            $table->longText('redaccion');//redaccion
            $table->text('url');//direccion del archivo jpg
            $table->string('email')->unique();//correo electronico
            $table->engine = 'InnoDB';
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tb_pruebas');
    }
}
