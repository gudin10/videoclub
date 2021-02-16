<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Eloquent\Model;
class CreateClubTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->string('year', 8);
            $table->string('password');
            //$table->smallInteger('votos');
            $table->string('director', 64);
            $table->string('poster');
            $table->string('email')->unique();
            $table->boolean('rented')->default(false);
            $table->text('synopsis');
            $table->timestamps();

            //$table->integer('user_id')->unsigned();
            //$table->foreign('user_id')->references('id')->on('users');
            $table->foreign('user_id')
            ->references('id')->on('users')
            ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Shema::drop('users');
        Schema::dropIfExists('users');

        $table->dropForeign('posts_user_id_foreign');
    }
}
