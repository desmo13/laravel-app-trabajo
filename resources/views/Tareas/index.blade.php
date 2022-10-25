@extends('plantilla')

@section('contenido')
<div class='container w-25 border p-4 mt-4 overflow-auto'>
<form action="{{route('tareaPost')}}" method="POST">
  @csrf
  @if (session('succees'))
    <h4 class="alert alert-success">{{session('succees')}}</h4>
  @endif
  @error('Titulo')
  <h4 class="alert alert-danger">{{$message}}</h4>
  @enderror
  <div class="mb-3 ">
    <label for="exampleInputEmail1" class="form-label">Nombre de la Tarea</label>
    <input id="Titulo" name="Titulo" type="text" class="form-control" >
    <div  class="form-text">Introduzca un nombre para la nueva tarea</div>
  </div>
  <button type="submit" class="btn btn-primary">Guardar Tarea </button>
</form>
  <div>
    @foreach ($Tareas as $tarea )
      <div class='row py-1'>
          <div  class='col-md-9 d-flex aling-items-center'>
            <a href="{{route('tareas-edit',['id'=>$tarea->Id])}}">{{$tarea->Titulo}}</a>
          </div>
          <div class='col-md-3 d-flex justify-content-end'>
            <form action="{{route('tareas-destroy',['id'=>$tarea->Id])}}" method='POST'>
              @method('DELETE')
              @csrf
              <button class='btn btn-danger  btn-sm'>Borrar</button>
            </form>
          </div >

      </div>
    @endforeach
  </div>
</div>
@endsection()