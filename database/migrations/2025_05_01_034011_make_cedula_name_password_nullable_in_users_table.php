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
        Schema::table('users', function (Blueprint $table) {
            // Modificar columna 'cedula' para permitir NULL
            $table->string('cedula', 50)->nullable()->change();
            
            // Modificar columna 'name' para permitir NULL
            $table->string('name', 191)->nullable()->change();
            
            // Modificar columna 'password' para permitir NULL
            $table->string('password', 191)->nullable()->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            // Revertir cambios si se hace rollback
            $table->string('cedula', 50)->nullable(false)->change();
            $table->string('name', 191)->nullable(false)->change();
            $table->string('password', 191)->nullable(false)->change();
        });
    }
};
