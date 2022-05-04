<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateComplaintsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('complaints', function (Blueprint $table) {
            $table->string('complaint_id', 20)->primary();
            $table->string('title');
            $table->string('name');
            $table->string('email');
            $table->string('subject');
            $table->string('policyno');
            $table->string('phonenumber');
            $table->string('nic');
            $table->string('contactmethod');
            $table->string('solutiontype');
            $table->string('message', 400);
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
        Schema::dropIfExists('complaints');
    }
}
