<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStoresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stores', function (Blueprint $table) {
            $table->increments('id');
            $table->string('textkecilatas');
            $table->string('textbesaratas');
            $table->string('Senin');
            $table->string('Selasa');
            $table->string('Rabu');
            $table->string('Kamis');
            $table->string('Jumat');
            $table->string('Sabtu');
            $table->string('Minggu');
            $table->string('cover')->nullable();
            $table->string('textkecilbold');
            $table->string('textbesar');
            $table->text('textkecil');
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
        Schema::dropIfExists('stores');
    }
}
