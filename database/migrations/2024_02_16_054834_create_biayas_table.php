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
        Schema::create('biayas', function (Blueprint $table) {
            $table->id();
            $table->string('judul', 128);
            $table->bigInteger('sumbangan');
            $table->bigInteger('semester');
            $table->bigInteger('jas');
            $table->bigInteger('posma');
            $table->bigInteger('sarung');
            $table->bigInteger('bulanan');
            $table->bigInteger('almari');
            $table->bigInteger('loundry');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('biayas');
    }
};
