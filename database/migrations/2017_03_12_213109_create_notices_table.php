<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNoticesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('notices', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->text('body');
            $table->string('featured_image')->nullable();
            $table->string('link')->nullable();
            $table->string('video')->nullable();
            $table->boolean('published')->default(true);
            $table->boolean('visible')->default(true);
            $table->integer('category_id')->nullable()->unsigned();
            $table->integer('mercado_id')->unsigned();
            $table->foreign('mercado_id')
                    ->references('id')
                    ->on('mercados')
                    ->onDelete('cascade')
                    ->onUpdate('cascade');
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
        Schema::dropIfExists('notices');
    }
}
