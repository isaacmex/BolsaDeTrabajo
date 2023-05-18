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
        Schema::table('vacantes', function (Blueprint $table) {
            $table->string('titulo');
            $table->text('salario');
            $table->foreignId('carrera_id')->constrained()->onDelete('cascade');
            $table->string('empresa');
            $table->text('descripcion');
            $table->string('imagen');
            $table->integer('publicado')->default(1);
            $table->foreignId('user_id')->constrained()->onDelete('cascade');



        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('vacantes', function (Blueprint $table) {
       $table->dropForeign('vacantes_user_id_foreign');
       $table->dropForeign('vacantes_carrera_id_foreign');
        $table->dropColumn('titulo');
        $table->dropColumn('salario');
        $table->dropColumn('carrera_id');
        $table->dropColumn('empresa');
        $table->dropColumn('descripcion');
        $table->dropColumn('imagen');
        $table->dropColumn('publicado');
        $table->dropColumn('user_id');

        });
    }
};
