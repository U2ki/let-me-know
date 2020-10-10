<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAnswerTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('answer', function (Blueprint $table) {
            $table->bigIncrements( 'id' );
            $table->unsignedBigInteger( 'question_id' );
            $table->text( 'a1' )->comment( 'A1' );
            $table->text( 'a2' )->comment( 'A2' )->nullable();
            $table->text( 'a3' )->comment( 'A3' )->nullable();
            $table->text( 'a4' )->comment( 'A4' )->nullable();
            $table->text( 'a5' )->comment( 'A5' )->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('answer');
    }
}
