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
        Schema::create('teams', function (Blueprint $table) {
            $table->id();
            $table->string('tittlea');
            $table->text('descriptiona');
            $table->string('imagea');
            $table->string('fba');
            $table->string('twa');
            $table->string('ina');
            $table->string('linka');
            $table->string('gita');
            $table->string('tittleb');
            $table->text('descriptionb');
            $table->string('imageb');
            $table->string('fbb');
            $table->string('twb');
            $table->string('inb');
            $table->string('linkb');
            $table->string('gitb');
            $table->string('tittlec');
            $table->text('descriptionc');
            $table->string('imagec');
            $table->string('fbc');
            $table->string('twc');
            $table->string('inc');
            $table->string('linkc');
            $table->string('gitc');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('teams');
    }
};
