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
            $table->float('screen_size', 4, 1);
            $table->string('resolution', 80);
            $table->string('processor', 20);
            $table->smallInteger('ram')->unsigned();
            $table->string('type_memory', 20);
            $table->string('graphics_card', 80);
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
