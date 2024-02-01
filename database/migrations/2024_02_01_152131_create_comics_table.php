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
        Schema::create('comics', function (Blueprint $table) {
            $table->id();

            $table->text('immagine');
            $table->string('titolo', 100);
            $table->string('serie', 50);
            $table->date('data_di_vendita');
            $table->string('prezzo', 20);
            $table->text('descrizione');

            $table->timestamps();
        });
    }
    // php artisan db:seed --class=ComicSeeder
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('comics');
    }
};
