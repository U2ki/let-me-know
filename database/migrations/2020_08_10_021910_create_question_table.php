<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateQuestionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('question', function (Blueprint $table) {
            $table->bigIncrements( 'id' );
            $table->text( 'title' )->comment( 'タイトル' );
            $table->text( 'url' )->comment( 'URL' );
            $table->integer( 'email_availability' )->default( 0 )->comment( 'メールの有無' );
            $table->text( 'q1' )->comment( 'Q1' );
            $table->text( 'q2' )->comment( 'Q2' );
            $table->text( 'q3' )->comment( 'Q3' );
            $table->text( 'q4' )->comment( 'Q4' );
            $table->text( 'q5' )->comment( 'Q5' );
            $table->integer( 'layout' )->default( 0 )->comment( 'レイアウト' );
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
        Schema::dropIfExists('question');
    }
}
