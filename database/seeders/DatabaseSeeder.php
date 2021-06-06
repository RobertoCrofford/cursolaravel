<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\curso;
use App\Models\user;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
       /* $curso = new curso();

        $curso->name = "Laravel";
        $curso->descripcion = "Estoy Aprendiendo Laravel";
        $curso->categoria = "desarrollo Web";

        $curso->save();
//'''''''''''''''''''''''''''
        $curso2 = new curso();

        $curso2->name = "Laravel";
        $curso2->descripcion = "Estoy Aprendiendo Laravel";
        $curso2->categoria = "desarrollo Web";

        $curso2->save();
//''''''''''''''''''''''''''''''''
        $curso3 = new curso();

        $curso3->name = "Laravel";
        $curso3->descripcion = "Estoy Aprendiendo Laravel";
        $curso3->categoria = "desarrollo Web";

        $curso3->save();

        // php artisan db:seed es para que despues de crear la tabla podamos guardar estos datos
            */
            curso::factory(50)->create();
            user::factory(10)->create();
    }
}
