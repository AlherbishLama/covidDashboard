<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCovidStatisticsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('covid_statistics', function (Blueprint $table) {

            $table->string('Country')->primary();

            $table->integer('NewConfirmed');
            $table->integer('TotalConfirmed');
            $table->integer('NewDeaths');
            $table->integer('TotalDeaths');
            $table->integer('NewRecovered');
            $table->integer('TotalRecovered');

            $table->string('Date');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('covid_statistics');
    }
}
