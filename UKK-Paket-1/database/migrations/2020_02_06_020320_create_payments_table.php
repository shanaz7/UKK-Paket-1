<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePaymentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('payments', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('officer_id')->unsigned();
            $table->bigInteger('student_id')->unsigned();
            $table->string('month_paid',8);
            $table->string('year_paid',4);
            $table->bigInteger('payment_agrement_id')->unsigned();
            $table->integer('total_payment')->length(11);
            $table->timestamps();

            $table->foreign("officer_id")->references("id")->on("officers");
            $table->foreign("student_id")->references("nisn")->on("students");
            $table->foreign("payment_agrement_id")->references("id")->on("payment_agrements");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('payments');
    }
}
