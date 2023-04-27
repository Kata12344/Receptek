<?php

use App\Models\Kategoria;
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
        Schema::create('kategorias', function (Blueprint $table) {
            $table->id('id');
            $table->string('nev');
            $table->timestamps();
        });
        Kategoria::create(['id' => 1, 'nev' => 'főétel']);
        Kategoria::create(['id' => 2, 'nev' => 'leves']);
        Kategoria::create(['id' => 3, 'nev' => 'édesség']);
        Kategoria::create(['id' => 4, 'nev' => 'saláta']);

    }
    

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kategorias');
    }
};
