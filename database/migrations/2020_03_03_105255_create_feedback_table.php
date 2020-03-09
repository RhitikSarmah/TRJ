<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFeedbackTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('feedback', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('email');
            $table->string('phone');
            $table->string('query1');
            $table->string('query2');
            $table->string('query3');
            $table->string('query4');
            $table->string('query5');
            $table->string('query6');
            $table->string('query7');
            $table->string('query8');
            $table->string('query9');
            $table->string('query10');
            $table->string('query11');
            $table->string('query12');
            $table->string('purchase');
            $table->string('ref')->nullable();
            $table->string('reason')->nullable();
            $table->string('complaint');
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
        Schema::dropIfExists('feedback');
    }
}
