<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tarea;
class TareasController extends Controller
{
    //
    public function index()
    {
        $tareas =Tarea::all();

        return view('Tareas.index',['Tareas'=>$tareas]);
    }

    public function store(Request $request)
    {
        $request-> validate([
            'Titulo'=>'required|min:3'
        ]);
        $tarea = new Tarea;
        $tarea ->Titulo =$request ->Titulo;
        $tarea ->save();
        return redirect() -> route('tareaPost')-> with('succees','Tarea Creada Correctamente');
    }
}
