<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTasksTable extends Migration
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
            $table->string('name', 128)->comment('タスクの名前');
            $table->date('period')->comment('タスクの期限');
            $table->text('detail')->comment('タスクの詳細内容');
            $table->unsignedTinyInteger('priority')->comment('重要度:(1:低い, 2:普通, 3:高い)');
            $table->unsignedBigInteger('user_id')->comment('このタスクの所有者');
            $table->foreign('user_id')->references('id')->on('users');
            //$table->timestamps();
            $table->dateTime('created_at')->useCurrent();
            $table->dateTime('updated_at')->useCurrent()->useCurrentOnUpdate();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tasks');
    }
}
