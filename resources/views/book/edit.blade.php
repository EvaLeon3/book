@extends('welcome')

@section('contenido')

<h2> Editar registro de libro </h2>
    <form 
        action="{{ route('libro.update', $libro) }}" 
        method="POST"
        enctype="multipart/form-data"
        class="container"
        > 
        @csrf
        @method('PUT')
        <div class="form-group">
            <label class="form-label"> Titulo </label>
            <input id="titulo" name="titulo" type="text" class="form-control" value="{{ old('titulo',$libro->titulo) }}" >
        </div>
        <div class="form-group">
            <label class="form-label"> Autor </label>
            <input id="autor" name="autor" type="text" class="form-control" value="{{ old('autor',$libro->autor) }}" >
        </div>
        <div class="form-group">
            <label class="form-label"> Precio</label>
            <input id="precio" name="precio" type="text" class="form-control" value="{{ old('precio',$libro->precio) }}" >
        </div>
        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
        <a href="/libro" class="btn btn-info" tabindex="5">Cancelar </a>
        <button type="submit" class="btn btn-outline-success" > Guardar </button>
        </div>
    </form>
@endsection