<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('projects', function (Blueprint $table) {
            $table->id();
            $table->string('project_ref');
            $table->string('country');
            $table->string('implementing_officer');
            $table->string('project_title');
            $table->string('grant_amount');
            $table->string('date_from_gcf');
            $table->string('start_date');
            $table->string('duration');
            $table->string('end_date');
            $table->string('readiness_or_nap');
            $table->string('types_of_readiness');
            $table->string('first_disbursement_amount');
            $table->string('status');
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
        Schema::dropIfExists('projects');
    }
}
