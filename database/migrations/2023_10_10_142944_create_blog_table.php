<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class CreateBlogTable extends Migration
{
    public function up()
    {
        Schema::create('blog_tabla', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->text('descripcion')->nullable();
            $table->string('creador', )->nullable();
            
            $table->timestamps();
        });

        DB::table('blog_tabla')->insert([
            [
                'nombre' => 'Menos estres gracias al estiramiento',
                'descripcion' => 'Actividades de baja intensidad, permiten tonificar los músculos mientras la tensión en la mente disminuyen.',
                'creador' => 'Lucas Fabre',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nombre' => 'Beneficio de una alimentacion saludable',
                'descripcion' => 'Una buena alimentación es fundamental para mantener un estilo de vida saludable y lleno de energía.',
                'creador' => 'Lucas Fabre',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nombre' => 'Ejercicios para fortalecer piernas y gluteos',
                'descripcion' => 'Descubre los mejores ejercicios para fortalecer tus piernas y glúteos de manera efectiva.',
                'creador' => 'Lucas Fabre',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nombre' => '¿Cuamto tengo que descansar despues de hacer ejercicio?',
                'descripcion' => 'Cuando una persona comienza a entrenar y obtiene resultados visibles a menudo se pregunta si es bueno descansar un día de hacer ejercicio y si se debe hacer ejercicio todos los días o descansar. Es una duda frecuente que aúna miedos tanto a perder forma física como a sentir que no se está haciendo algo bien.',
                'creador' => 'Lucas Fabre',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nombre' => 'Ejercicios para aliviar el dolor de ciatica',
                'descripcion' => 'Si sufres de radiculopatía lumbar, comúnmente conocida como “dolor de ciática”, no te pierdas este blog en el que te explicamos qué es el nervio ciático, síntomas y posibles causas de este malestar con el que se lo asocia, y una infografía gratuita con los ejercicios que te pueden ayudar a aliviar las molestias.',
                'creador' => 'Lucas Fabre',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nombre' => 'Cómo mantener tus rodillas saludables y felices durante cualquier entrenamiento',
                'descripcion' => 'Siempre, siempre calienta antes de hacer ejercicio. Las lesiones del ligamento cruzado anterior (LCA) pueden prevenirse si se calienta antes de empezar con el ejercicio, y sin ir más lejos, cualquier lesión se puede prevenir de esta manera. Una de las formas de entrar en calor es haciendo 10 minutos de bicicleta estática y estiramientos activos después.',
                'creador' => 'Lucas Fabre',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }

    public function down()
    {
        Schema::dropIfExists('blog_tabla');
    }
}

?>
