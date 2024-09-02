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
        Schema::create('cible', function (Blueprint $table) {
            $table->increments("id");
            $table->integer("nombre_cible")->default(1);
            $table->string("type_cible",100);
            $table->string("lecture_cible",100);
            $table->string("statut_cible",100);
            $table->string("description_cible",100);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cible');
    }
};
