<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTicketIssuesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ticket_issues', function (Blueprint $table) {
            $table->id();
            $table->string('pnr');
            $table->foreignId('user_passport_details_id');
            $table->string('destination');
            $table->date('travel_date');
            $table->date('issue_date');
            $table->string('issue_by');
            $table->string('issue_from');
            $table->string('purchase_amount');
            $table->string('sale_amount');
            $table->string('ticket_number');
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
        Schema::dropIfExists('ticket_issues');
    }
}
