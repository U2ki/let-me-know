<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateQAndATable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('q_and_a', function (Blueprint $table) {
            $table->bigIncrements( 'id' );
            $table->unsignedBigInteger( 'question_id' );
            $table->unsignedBigInteger( 'answer_id' );
            $table->timestamps();
            $table->softDeletes();
            $table->foreign( 'question_id' )->references( 'id' )->on( 'question' );
            $table->foreign( 'answer_id' )->references( 'id' )->on( 'answer' );
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('q_and_a');
    }
}
