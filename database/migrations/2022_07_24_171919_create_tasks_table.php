<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tasks', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('creator_id', false, true)->nullable();
            $table->string('title', 100);
            $table->string('content', 500);
            $table->bigInteger('status_id', false, true)->nullable();
            $table->timestamps();

            $table->foreign('creator_id', 'tasks_users_id')->references('id')->on('users');
            $table->foreign('status_id', 'tasks_statuses_id')->references('id')->on('statuses');
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('tasks', function (Blueprint $table) {
        $table->dropForeign('tasks_users_id');
        $table->dropForeign('tasks_statuses_id');
        });
        Schema::dropIfExists('tasks');

    }
};
