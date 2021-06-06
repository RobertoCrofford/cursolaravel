<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCurso;
use App\Models\curso; 

use Illuminate\Http\Request;


class CursoController extends Controller
{
    // ejemplo de controladores
    public function index()
    {
        // El metodo de mostrar una pagina principal se lo denomina index
        //return" Bienvenido a la pagina de cursos "; se lo pasamos a una vistas
        $cursos = curso::orderBy('id','desc')->paginate(); 
        return View('cursos.index', compact('cursos'));

    }

    public function create()
    {
        // El metodo  que te muestre el formulario para crear curso o cualquier cosa
        //return" en esta pagina puedes cear "; se lo pasamos a una vistas
        return View('cursos.create');

    }

    public function store(StoreCurso $request)
    {
      /*  $request->validate([

            'name' => 'required',
            'descripcion' => 'required',
            'categoria' => 'required'
        ]);  */

        /*$curso = new curso(); 
        
        $curso->name = $request->name;
        $curso->descripcion = $request->descripcion;
        $curso->categoria = $request->categoria;
        $curso->save();*/

       /* $curso = Curso::create([
            'name'=>$request->name,
            'descripcion'=>$request->descripcion,
            'categoria'=>$request->categoria,

        ]);*///otra forma de guardar
        $curso = curso::create($request->all());

        return redirect()->route('cursos.show', $curso);
    }

    public function show(curso $curso)
    {
        // El metodo de mostrar una curso en particular
        //   return" bienvenido crofford al curso: $curso"; se lo pasamos a una vistas
       
        return View('cursos.show', compact('curso'));
    }
    public function edit(curso $curso)
    {
       return view('cursos.edit',compact('curso'));

        
    }

    public function update(Request $request, curso $curso){

        $request->validate([

            'name' => 'required',
            'descripcion' => 'required',
            'categoria' => 'required'
        ]);

       /* $curso->name = $request->name;
        $curso->descripcion = $request->descripcion;
        $curso->categoria = $request->categoria;

         $curso->save();*/

         $curso->update($request->all());

         return redirect()->route('cursos.show', $curso->id);

    }
        //php artisan make:request StoreCurso/para crear un archivo para validar 

       public function destroy(curso $curso)
       {
        $curso->delete();
        return redirect()->route('cursos.index');
       }
}
