<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class CreatePreciosTable extends Migration
{
    public function up()
    {
        Schema::create('precios', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->text('descripcion');
            $table->decimal('precio');
            $table->timestamps();
        });

        DB::table('precios')->insert([
            [
                'nombre' => 'Standard Pack',
                'descripcion' => 'Plan básico para usuarios individuales.',
                'precio' => 11000,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nombre' => 'Pro Pack',
                'descripcion' => 'Plan Pro con funcionalidades adicionales.',
                'precio' => 15000,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nombre' => 'Gold Pack',
                'descripcion' => 'Nuestro Gold Pack con acceso completo a todas las características.',
                'precio' => 19000,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }

    public function down()
    {
        Schema::dropIfExists('precios');
    }
}



?>