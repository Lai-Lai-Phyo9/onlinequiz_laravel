<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMultiquestionUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('multiquestion_user', function (Blueprint $table) {
            $table->id();
            $table->tinyInteger('answer');
            $table->integer('mark');
            //foreign key in questions table
            $table->unsignedBigInteger('multiquestion_id');
            $table->unsignedBigInteger('user_id');

            $table->foreign('multiquestion_id')
                  ->references('id')
                  ->on('multiquestions')
                  ->onDelete('cascade');

            $table->foreign('user_id')
                  ->references('id')
                  ->on('users')
                  ->onDelete('cascade');
                  
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
        Schema::dropIfExists('multiquestion_user');
    }
}
