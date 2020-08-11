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
            $table->text( 'a1' )->comment( 'A1' );
            $table->text( 'a2' )->comment( 'A2' );
            $table->text( 'a3' )->comment( 'A3' );
            $table->text( 'a4' )->comment( 'A4' );
            $table->text( 'a5' )->comment( 'A5' );
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
