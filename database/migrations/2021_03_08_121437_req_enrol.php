<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ReqEnrol extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('req_enrol', function (Blueprint $table) {
            $table->id();
            $table->foreignId('req_id')->constrained('requirements');
            $table->foreignId('enrolment_id')->constrained('enrolments');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('req_enrol');
    }
}
