@extends('welcome')

@section('contenido')

<h2> Editar registro municipios </h2>
    <form 
        action="{{ route('catalogo.update', $catalogo) }}" 
        method="POST"
        enctype="multipart/form-data"
        class="container"
    > 
        @csrf
        @method('PUT')
   {{--      <div class="form-group">
            <label class="form-label">Nombre </label>
            <input id="nombre" name="nombre" type="text" class="form-control" value="{{ old('nombre',$municipio->nombre) }}" >
        </div> --}}
        <select class="form-select" aria-label="Default select example" name="nombre">
            <option selected>Selecciona el municipio</option>
            @foreach($municipio as $municipio)
                <option value="{{old('nombre',$municipio->nombre)}}">{{$municipio->nombre}}</option>
            @endforeach
        </select>
        <div class="col-auto">
            <label for="date" _msthash="2228161" _msttexthash="254410"> Fecha</label>
            <input type="date" id="fecha" name="fecha" value="{{ old('fecha', $catalogo->fecha)}}">
        </div>
        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
        <a href="/catalogo" class="btn btn-info" tabindex="5">Cancelar </a>
        <button type="submit" class="btn btn-outline-success" > Guardar </button>
       
    </div>
    </form>
@endsection