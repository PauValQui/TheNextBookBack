<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLibroTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('libro', function (Blueprint $table) {
            $table->id()->autoincrement()->unique();
            $table->string('titulo',100);
            $table->text('sinopsis');
            $table->decimal('precio',$precision=8, $scale=2);
            $table->string('foto')->nullable();
            $table->bigInteger('categoria_id')->references('id')->on('categoria')->onDelete('cascade')->nullable();
            $table->bigInteger('autor_id')->references('id')->on('autor')->onDelete('cascade')->nullable();

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
        Schema::dropIfExists('libro');
    }
}

