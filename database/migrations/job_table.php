<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up():void
    {
        Schema::create('jobs', function (Blueprint $table) {
            $table->id();
            $table->year('starting_year');
            $table->year('year_end')->nullable();
            $table->string('field');
            $table->string('company');
            $table->string('address');
            $table->text('work_description');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down():void
    {
        Schema::dropIfExists('jobs');
    }
};
