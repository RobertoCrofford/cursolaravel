<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class curso extends Model
{
    use HasFactory;
   /* protected $fillable = ['name','descripcion','categoria'];*/
    protected $guarded = [''];
}

//php artisan make:model curso para poder hacer el crud
//php artisan tinker para entrar a una terminal agregar a las tabla de base de datos 
// php artisan tinker para entrar a la parte de agregar
//use App\Models\curso para entrar al curso despues creo una instancia $curso = new curso;
// dentro de la instancia comienzo agregar datos esto debe de salir cuando esta ok App\Models\curso {#3326}
// para guardar los datos se usa $curso->save();
// para agregar es $curso->name = 'laravel'; y despues para ver $curso; para guardar $curso->save();