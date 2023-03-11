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
        Schema::create('course_self_learner', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->foreignId('self_learner_id')
            ->constrained()
            ->onUpdate('cascade')
            ->onDelete('cascade'); 
            $table->foreignId('course_id')
            ->constrained()
            ->onUpdate('cascade')
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
        Schema::dropIfExists('course_self_learner');
    }
};
