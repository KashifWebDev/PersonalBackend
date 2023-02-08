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
        Schema::create('project_timeline_rows', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('project_timeline_id');
            $table->string('heading');
            $table->longText('description');
            $table->timestamp('time');
            $table->boolean('isDone')->default(false);
            $table->timestamps();
            $table->foreign('project_timeline_id')->references('id')->on('project_timelines')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('project_timeline_rows');
    }
};
