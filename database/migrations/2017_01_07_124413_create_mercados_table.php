<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMercadosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mercados', function (Blueprint $table) {
            $table->increments('id')->unsigned()->unique();
            $table->string('mercado',70)->nullable();
            $table->string('domicilio',90)->nullable();
            $table->string('logo',45)->nullable();
            $table->string('url_web',200)->nullable();
            $table->string('url_facebook',200)->nullable();
            $table->string('categoria',45)->nullable();
            $table->integer('mercadocategory_id')->nullable()->unsigned();
            $table->string('latitud', 10, 7)->nullable();
            $table->string('longitud', 10, 7)->nullable();
            $table->string('telefono',45)->nullable();
            $table->string('email', 45)->nullable();
            $table->string('horarios',70)->nullable();
            $table->string('localidad',45)->nullable();
            $table->string('provincia',45)->nullable();
            $table->string('descripcion',7000)->nullable();
            $table->string('url_youtube',300)->nullable();
            $table->string('imagen',45)->nullable();    
            $table->boolean('visible')->default(1);        
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
        Schema::dropIfExists('mercados');
    }
}
