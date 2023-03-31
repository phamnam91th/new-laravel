<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('data', function(Blueprint $table) {
            $table->increments('id');
            $table->integer('personId');
            $table->foreign('personId')->references('id')->on('person');
            $table->string('path');
            $table->string('name');
            $table->string('flag')->default('1');
            $table->dateTime('create_at');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
