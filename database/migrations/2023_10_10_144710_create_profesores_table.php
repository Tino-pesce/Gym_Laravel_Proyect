<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class CreateProfesoresTable extends Migration
{
    public function up()
    {
        Schema::create('profesores', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->text('edad')->nullable();
            $table->text('sobre_mi');
            
            $table->timestamps();
        });

        DB::table('profesores')->insert([
            [
                'nombre' => 'Lucas Fabre',
                'edad' => '25',
                'sobre_mi' => '
                Hola, soy Lucas, un apasionado profesor de gimnasia y entrenador personal. Con 7 años de experiencia, mi enfoque se centra en ayudarte a alcanzar tus metas de fitness de manera efectiva y sostenible.
                
                Creo en la individualidad del fitness y diseño programas personalizados adaptados a tus necesidades específicas. Mi objetivo es guiarte hacia un estilo de vida más saludable, no solo físicamente, sino también mental y emocionalmente.
                
                Estoy aquí para brindarte el apoyo y la motivación necesarios para transformar tu cuerpo y mejorar tu bienestar. ¡Espero trabajar contigo para alcanzar tus objetivos de fitness!
                
                Saludos,
                Lucas
                Entrenador Personal y Profesor de Gimnasia',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nombre' => 'Franco Buccieri',
                'edad' => '30',
                'sobre_mi' => '
                Hola, soy Franco Buccieri, un entrenador personal apasionado con 8 años de experiencia. Mi objetivo es ayudarte a alcanzar tus metas de fitness de manera realista y sostenible. Diseño programas adaptados a tu estilo de vida único para mejorar tu energía y confianza. Estoy aquí para motivarte y celebrar tus logros contigo. ¡Vamos a comenzar este viaje juntos!',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nombre' => 'Nicolas Vommaro',
                'edad' => '28',
                'sobre_mi' => '

                Hola, soy Nicolás Vommaro, un entrenador personal con 3 años de experiencia y 28 años de edad. Mi enfoque es ayudarte a lograr tus objetivos de fitness de manera efectiva y motivante. Estoy aquí para guiarte y apoyarte en tu camino hacia un estilo de vida más saludable. ¡Empecemos este viaje juntos!',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nombre' => 'Santino Pesce',
                'edad' => '26',
                'sobre_mi' => '

                Hola, soy Santino Pesce, un entrenador personal de 26 años con 2 años de experiencia en fitness. Mi pasión es ayudarte a alcanzar tus metas de salud y bienestar. Estoy aquí para motivarte y guiarte en tu viaje hacia un estilo de vida más activo y saludable. ¡Juntos, lograremos tus objetivos de fitness!',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nombre' => 'Tomas Massa',
                'edad' => '26',
                'sobre_mi' => '¡Hola! Soy Tomás Massa, un apasionado entrenador personal de 26 años con una gran energía y muchas ganas de trabajar. Aunque tengo poca experiencia, estoy dedicado a ayudarte a alcanzar tus metas de fitness y mejorar tu bienestar. Estoy comprometido a aprender y crecer junto contigo. ¡Estoy emocionado por la oportunidad de trabajar juntos para lograr tus objetivos!',
                'created_at' => now(),
                'updated_at' => now(),
            ],
           
        ]);
    }

    public function down()
    {
        Schema::dropIfExists('profesores');
    }
}

?>
