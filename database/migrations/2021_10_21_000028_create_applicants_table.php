<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateApplicantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('applicants', function (Blueprint $table) {
            $table->id();
            $table->string("title")->nullable(); 
            $table->string("name")->nullable(); 
            $table->string("email")->nullable(); 
            $table->string("phone")->nullable(); 
            $table->string("mobile")->nullable(); 
            $table->unsignedBigInteger('degree_id')->nullable(); 
            $table->unsignedBigInteger('job_id')->nullable(); 
            $table->unsignedBigInteger('departement_id')->nullable(); 
            $table->unsignedBigInteger('company_id')->nullable(); 
            $table->integer("recruiter_id")->nullable(); 
            $table->integer("appreciation")->nullable(); 
            $table->unsignedBigInteger('metsos_source_id')->nullable(); 
            $table->double("expected_salary")->nullable(); 
            $table->double("expected_salary_extra")->nullable(); 
            $table->double("proposed_salary")->nullable(); 
            $table->double("proposed_salary_extra")->nullable(); 
            $table->date("availability")->nullable(); 
            $table->string("description")->nullable(); 
            $table->boolean("is_active")->nullable(); 
            $table->date("date_closed")->nullable(); 
            $table->date("date_open")->nullable(); 
            $table->date("date_last_stage_up")->nullable(); 
            $table->integer("recruitment_stage_id")->nullable(); 
            $table->integer("last_recruitment_stage_id")->nullable(); 
            $table->double("probability")->nullable(); 
            $table->unsignedBigInteger('user_id')->nullable(); 

            $table->foreign('degree_id')->references('id')->on('degrees')->onDelete('cascade');
            $table->foreign('job_id')->references('id')->on('jobs')->onDelete('cascade');
            $table->foreign('departement_id')->references('id')->on('departements')->onDelete('cascade');
            $table->foreign('company_id')->references('id')->on('companies')->onDelete('cascade');
            $table->foreign('metsos_source_id')->references('id')->on('metsos_sources')->onDelete('cascade');
            $table->foreign('user_id')->references('id')->on('badaso_users')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('applicants');
    }
}