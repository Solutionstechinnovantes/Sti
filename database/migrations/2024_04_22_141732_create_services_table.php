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
        Schema::create('services', function (Blueprint $table) {
            $table->id();
            $table->string('tittlea');
            $table->text('descriptiona');
            $table->string('imagea');
            $table->string('tittleb');
            $table->text('descriptionb');
            $table->string('imageb');
            $table->string('tittlec');
            $table->text('descriptionc');
            $table->string('imagec');
            $table->string('tittled');
            $table->text('descriptiond');
            $table->string('imaged');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('services');
    }
};

