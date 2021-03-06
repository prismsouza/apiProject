<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePeopleTable extends Migration
{
    /**
     * Run the migrations.
     * @return void
     */
    public function up()
    {
        Schema::create('people', function (Blueprint $table) {
            $table->uuid('masp')->primary();
            $table->string('name');
            $table->string('is_active')->nullable();
            $table->string('cpf')->unique();
            $table->string('rg')->unique()->nullable();
            $table->string('is_accredited')->nullable();
            $table->string('driver_category')->nullable();
            $table->char('gender')->nullable();
            $table->date('birth_date')->nullable();
            $table->date('inclusion_date')->nullable();
            $table->string('occupation')->nullable();
            $table->string('level')->nullable();
            $table->string('functional_situation')->nullable();
            $table->integer('unit_id')->nullable()->unsigned()->nullable();
            $table->foreign('unit_id')->references('unit_id')->on('units');
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
