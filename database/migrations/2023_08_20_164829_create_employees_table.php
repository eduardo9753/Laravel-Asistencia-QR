<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmployeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employees', function (Blueprint $table) {
            $table->id();
            $table->string('nombres');
            $table->string('apellidos');
            $table->integer('edad');
            $table->string('documento');

            $table->foreignId('departament_id')
                ->nullable()
                ->constrained('id')
                ->on('departments')
                ->nullOnDelete('true');

            $table->foreignId('position_id')
                ->nullable()
                ->constrained('id')
                ->on('positions')
                ->nullOnDelete('true');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('employees');
    }
}
