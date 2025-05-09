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
        Schema::create('lgenals', function (Blueprint $table) {
            $table->string('client');
            $table->string('rif');
            $table->string('serial');
            $table->string('model');
            $table->string('location');
            $table->date('date');
            $table->integer('cont_ante_bn');
            $table->integer('cont_actu_bn');
            $table->integer('volum_bn');
            $table->integer('cont_ante_color');
            $table->integer('cont_actu_color');
            $table->integer('volum_color');
            $table->integer('scanImages');
            $table->integer('scanJobs');
            $table->timestamps();        
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('lgenals');
    }
};
