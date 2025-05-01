<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Alteramos las columnas para permitir NULL, estamos usando raw SQL 
        //por que hay problemas de compatibilidad con Dbal 4 y Laravel 9 para la funcion nullable
        DB::statement('ALTER TABLE users MODIFY cedula VARCHAR(50) NULL');
        DB::statement('ALTER TABLE users MODIFY name VARCHAR(191) NULL');
        DB::statement('ALTER TABLE users MODIFY password VARCHAR(191) NULL');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        // Revertimos los cambios
        DB::statement('ALTER TABLE users MODIFY cedula VARCHAR(50) NOT NULL');
        DB::statement('ALTER TABLE users MODIFY name VARCHAR(191) NOT NULL');
        DB::statement('ALTER TABLE users MODIFY password VARCHAR(191) NOT NULL');
    }
};
