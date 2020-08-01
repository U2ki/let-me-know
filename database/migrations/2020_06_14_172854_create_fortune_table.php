<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFortuneTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fortune', function (Blueprint $table) {
            $table->id();
            $table->string('my_name');
            $table->string('my_crush_name');
            $table->unsignedBigInteger( 'peek_user_id' );
            $table->timestamps();
            $table->softDeletes();
            $table->foreign( 'peek_user_id' )->references( 'id' )->on( 'users' );
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('fortune');
    }
}
