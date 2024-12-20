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
        Schema::create('empleados', function (Blueprint $table) {
            $table->string('Codempleado',4)->primary();
            $table->string('Nomempleado',30);
            $table->string('Apeempleado',50);
            $table->string('CodDepartamento');
            $table->string('Dirempleado',50);

            $table
            ->foreign('CodDepartamento')
            ->references('CodDepartamento')
            ->on('departamentos')
            ->onUpdate('CASCADE')
            ;

            // $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('empleados');
    }
};
