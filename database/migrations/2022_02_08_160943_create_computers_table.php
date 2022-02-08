<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateComputersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('computers', function (Blueprint $table) {
            $table->id();
            $table->string('brand', 50);
            $table->string('series', 100);
            $table->smallInteger('screen_size')->unsigned();
            $table->string('resolution', 20);
            $table->string('processor', 20);
            $table->smallInteger('ram')->unsigned();
            $table->string('memory', 20);
            $table->string('graphics_card', 50);
            $table->float('price', 8, 2);
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
        Schema::dropIfExists('computers');
    }
}
