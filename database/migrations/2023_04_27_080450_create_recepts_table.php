<?php

use App\Models\Recept;
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
        Schema::create('recepts', function (Blueprint $table) {
            $table->id();
            $table->string('recept_nev');
            $table->foreignId('kat_id')->references('id')->on('kategorias');
            $table->string('kep_eleresi_ut');
            $table->string('leiras');
            $table->timestamps();
        });
        Recept::create(['recept_nev' => "Mákos maki", 'kat_id' => 3, 'kep_eleresi_ut' => 'valami', 'leiras' => 'finom']);
        Recept::create(['recept_nev' => "Húsleves", 'kat_id' => 2, 'kep_eleresi_ut' => 'valami2', 'leiras' => 'finom']);
        Recept::create(['recept_nev' => "Burgonya főzelék", 'kat_id' => 1, 'kep_eleresi_ut' => 'valami', 'leiras' => 'finom']);
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('recepts');
    }
};
