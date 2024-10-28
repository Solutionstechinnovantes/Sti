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
        Schema::create('about', function (Blueprint $table) {
            $table->id();
            $table->string('axea');
            $table->string('axeb');
            $table->string('axec');
            $table->string('axed');
            $table->string('titlea');
            $table->string('titleb');
            $table->string('titlec');
            $table->string('titled');
            $table->string('subtitlea');
            $table->string('subtitleb');
            $table->string('subtitlec');
            $table->string('subtitled');
            $table->string('descriptiona');
            $table->string('descriptionb');
            $table->string('descriptionc');
            $table->string('descriptiond');
            $table->string('icon_imagea');
            $table->string('icon_imageb');
            $table->string('icon_imagec');
            $table->string('icon_imaged');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('about');
    }
};
