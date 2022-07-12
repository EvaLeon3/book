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
            <label class="form-label"> Precio</label>
            <input id="precio" name="precio" type="text" class="form-control" value="{{ old('precio',$libro->precio) }}" >
        </div>
        {{-- <div class="col-auto">
            <label for="date" _msthash="2228161" _msttexthash="254410"> Fecha de prestamo </label>
            <input type="date" id="created_at" name="created_at" value="{{ old('created_at', $libro->created_at)}}">
         </div> --}}
         <select class="form-select" aria-label="Default select example" name="autors_id">
            <option selected>Selecciona el autor</option>
            @foreach($autor as $autor)
                <option value="{{$autor->id}}">{{$autor->nombre}}</option>
            @endforeach
        </select>
        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
        <a href="/libro" class="btn btn-info" tabindex="5">Cancelar </a>
        <button type="submit" class="btn btn-outline-success" > Guardar </button>
        </div>
    </form>
@endsection