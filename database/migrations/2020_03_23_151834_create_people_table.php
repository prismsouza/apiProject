<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePeopleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('people', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('masp');
            $table->string('is_active');
            $table->string('cpf');
            $table->string('rg');
            $table->string('is_accredited');
            $table->string('driver_category');
            $table->char('gender');
            $table->date('birth_date');
            $table->date('inclusion_date');
            $table->string('occupation');
            $table->string('level');
            $table->string('functional_situation');
            $table->integer('unity_code');

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
        Schema::dropIfExists('people');
    }
}
