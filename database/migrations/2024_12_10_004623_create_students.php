<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->string('cedula_escolar')->unique();
            $table->string('apellidos');
            $table->string('nombres');
            $table->enum('sexo', ['M', 'F']);
            $table->date('fecha_nacimiento');
            $table->string('lugar_nacimiento');
            $table->integer('edad')->virtualAs('TIMESTAMPDIFF(YEAR, fecha_nacimiento, CURDATE())');
            $table->string('representante');
            $table->string('cedula_representante');
            $table->string('telefono_representante');
            $table->text('direccion');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('students');
    }
};
