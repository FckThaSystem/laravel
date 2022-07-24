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
        Schema::create('task_label', function (Blueprint $table) {
            $table->bigInteger('task_id', false, true);
            $table->bigInteger('label_id', false, true);

            $table->foreign('task_id', 'task_field_id')->references('id')->on('tasks');
            $table->foreign('label_id', 'label_field_id')->references('id')->on('labels');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('task_label', function (Blueprint $table) {
        $table->dropForeign('task_field_id');
        $table->dropForeign('label_field_id');
        });
        Schema::dropIfExists('task_label');
    }
};
