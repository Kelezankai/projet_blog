<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
public function up()
{
    Schema::create('demande_ecrivains', function (Blueprint $table) {
        $table->id();
        $table->string('nom');
        $table->string('email');
        $table->text('motivation');
        $table->boolean('approuve')->default(false);
        $table->timestamps();
    });
}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('demande_ecrivains');
    }
};
