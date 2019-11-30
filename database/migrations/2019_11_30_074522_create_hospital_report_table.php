<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHospitalReportTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hospital_report', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('hospital_id');
            $table->unsignedBigInteger('report_id');
            $table->unique(['hospital_id','report_id']);
            $table->foreign('hospital_id')->references('id')->
            on('hospitals')->onDelete('cascade');
            $table->foreign('report_id')->references('id')->
            on('reports')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('hospital_report');
    }
}
