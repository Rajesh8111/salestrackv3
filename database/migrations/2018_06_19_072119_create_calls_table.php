<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCallsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('calls', function (Blueprint $table) {
            $table->increments('id');
            $table->string('clientName');
            $table->string('processName');
            $table->string('region')->nullable();
            $table->string('clientContactName')->nullable();
            $table->string('clientDesignation')->nullable();
            $table->string('salesSpoc')->nullable();
            $table->string('firstCall')->nullable();
            $table->string('secondCall')->nullable();
            $table->string('responsiblePerson')->nullable();
            $table->string('clientFeedback')->nullable();
            $table->string('targetDate')->nullable();
            $table->string('remarks')->nullable();
            $table->string('projectStartDate')->nullable();
            $table->string('projectEndDate')->nullable();
            $table->string('opportunityStatus')->nullable();
            $table->string('currentStatus')->nullable();            
            $table->string('currentUpdates')->nullable();
            $table->string('conversationalHistory')->nullable();
            $table->string('prodaptParticipants')->nullable();
            $table->string('discussionPoints')->nullable();
            $table->string('nextSteps')->nullable();
            $table->string('category');
            $table->string('status');
            $table->boolean('enabled');
            $table->timestamp('created_at')->useCurrent();            
            $table->timestamp('updated_at')->useCurrent();            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('calls');
    }
}
