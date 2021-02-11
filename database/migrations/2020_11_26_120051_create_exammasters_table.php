<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateExammastersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('exammasters', function (Blueprint $table) {
            $table->id();
              $table->string('title')->nullable();
              $table->string('category')->nullable();
              $table->string('examdate')->nullable();
              $table->string('status')->nullable();
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
        Schema::dropIfExists('exammasters');
    }
}
