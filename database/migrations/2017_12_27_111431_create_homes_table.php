<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHomesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('homes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('textkecilhd');
            $table->string('textbesarhd');
            $table->string('cover')->nullable();
            $table->string('textkecilboldbd');
            $table->string('textbesarbd');
            $table->text('textkecilbd');
            $table->string('textkecilboldft');
            $table->string('textbesarft');
            $table->text('textkecilft');
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
        Schema::dropIfExists('homes');
    }
}
