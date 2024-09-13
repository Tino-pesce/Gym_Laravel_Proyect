<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class CreateEstiramientosTable extends Migration
{
    public function up()
    {
        Schema::create('estiramientos', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->text('descripcion')->nullable();
            $table->string('nivel_dificultad', 50)->nullable();
            $table->integer('duracion_minutos')->nullable();
            $table->timestamps();
        });


        DB::table('estiramientos')->insert([
            [
                'nombre' => 'Espalda Baja',
                'descripcion' => 'Ponte de pie con las piernas alineadas a tus caderas. Coloca los brazos relajados a los lados de tu cuerpo. Coge aire profundamente, dobla la espalda hacia adelante lentamente y deja caer los brazos de forma relajada hacia abajo y adelante. Sentirás como los primeros músculos en estirarse son los de la zona lumbar.',
                'nivel_dificultad' => 'Facil',
                'duracion_minutos' => 10,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nombre' => 'Hombros',
                'descripcion' => 'Relaje los hombros a medida que se inclina hacia adelante, permitiendo que se estiren los músculos del pecho y del hombro. También puede girar su cuerpo ligeramente alejándolo de su brazo para estirar los músculos aún más.',
                'nivel_dificultad' => 'Facil',
                'duracion_minutos' => 12,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nombre' => 'Cuadriceps',
                'descripcion' => 'En el caso del estiramiento, este se realiza de pie y se procede a flexionar la rodilla y llevarla hacia la parte del glúteo, luego en esta posición se debe sostener el pie con una mano y mantener la posición por unos segundos.',
                'nivel_dificultad' => 'Facil',
                'duracion_minutos' => 5,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nombre' => 'Triceps',
                'descripcion' => 'El codo debe estar cerca de la cabeza y apuntando hacia arriba, colocamos la mano contraria sobre el codo y empujamos tratando de que descienda hacia la nuca. ',
                'nivel_dificultad' => 'Intermedia',
                'duracion_minutos' => 5,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nombre' => 'Cuello',
                'descripcion' => 'El estiramiento del cuello es un procedimiento estético que elimina el exceso de piel y grasa alrededor de la línea de la mandíbula para crear un cuello más definido y con aspecto más joven. ',
                'nivel_dificultad' => 'Intermedio',
                'duracion_minutos' => 8,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            
            [
                'nombre' => 'Cuerpo Completo',
                'descripcion' => 'Lo más importante es realizar ejercicios suaves y mantenidos, llevando el músculo un punto más allá de su posición en reposo. Los estiramientos deben producir una pequeña tensión, pero nunca deben ser dolorosos. Cada estiramiento tiene que ir acompañado por la respiración.',
                'nivel_dificultad' => 'Intermedia',
                'duracion_minutos' => 9,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }

    public function down()
    {
        Schema::dropIfExists('estiramientos');
    }
}

?>