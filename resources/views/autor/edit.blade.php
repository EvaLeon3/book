@extends('welcome')

@section('contenido')

<h2> Editar registro de autor </h2>
    <form 
        action="{{ route('autor.update', $autor) }}" 
        method="POST"
        enctype="multipart/form-data"
        class="container"
    > 
        @csrf
        @method('PUT')
        <div class="form-group">
            <label class="form-label">Nombre </label>
            <input id="nombre" name="nombre" type="text" class="form-control" value="{{ old('nombre',$autor->nombre) }}" >
        </div>
        <div class="form-group">
            <label class="form-label"> Apellido </label>
            <input id="apellido" name="apellido" type="text" class="form-control" value="{{ old('apellido',$autor->apellido) }}" >
        </div>
        <div class="col-auto">
            <label for="date" _msthash="2228161" _msttexthash="254410"> Fecha de nacimiento</label>
            <input type="date" id="fecha" name="fecha" value="{{ old('fecha', $autor->fecha)}}">
        </div>
        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
        <a href="/autor" class="btn btn-info" tabindex="5">Cancelar </a>
        <button type="submit" class="btn btn-outline-success" > Guardar </button>
        </div>
    </form>
@endsection