<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAccountGroupsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create(config('badaso.database.prefix').'account_groups', function (Blueprint $table) {
            $table->id();
            $table->string("parent_path")->nullable(); 
            $table->string("name")->nullable(); 
            $table->string("code_prefix_start")->nullable(); 
            $table->string("code_prefix_end")->nullable(); 
            $table->unsignedBigInteger('company_id')->nullable(); 

            $table->foreign('company_id')->references('id')->on(config('badaso.database.prefix').'companies')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists(config('badaso.database.prefix').'account_groups');
    }
}