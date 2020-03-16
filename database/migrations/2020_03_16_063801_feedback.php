<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Feedback extends Migration
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
            $table->string('query1')->nullable();
            $table->string('query2')->nullable();
            $table->string('query3')->nullable();
            $table->string('query4')->nullable();
            $table->string('query5')->nullable();
            $table->string('query6')->nullable();
            $table->string('query7')->nullable();
            $table->string('query8')->nullable();
            $table->string('query9')->nullable();
            $table->string('feedback')->nullable();
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
