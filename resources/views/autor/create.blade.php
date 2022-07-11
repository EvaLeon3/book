@extends('welcome')

@section('contenido')

<h2> Crear autores </h2>
    <form 
        action="{{ route('autor.store')}}" 
        method="POST"
        enctype="multipart/form-data"
        class="container"
    >
        @csrf
        @if($errors->any())
            <div class="alert alert-danger">
                @foreach($errors->all() as $error) - {{ $error }} <br>
                @endforeach
            </div>
        @endif  
            <div class="form-group">
                <label class="form-label"> Nombre</label>
                <input id="nombre" name="nombre" type="text" class="form-control" placeholder="Ingrese el autor" value="{{old('nombre')}}">
            </div>
            <div class="form-group">
                <label class="form-label"> Apellido</label>
                <input id="apellido" name="apellido" type="text" class="form-control" placeholder="Ingrese el autor" value="{{old('apellido')}}">
            </div>
            <div class="col-auto">
                <label for="date" _msthash="2228161" _msttexthash="254410"> Fecha de nacimiento</label>
                <input type="date" id="fecha" name="fecha">
            </div>
            <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                <a href="/autor" class="btn btn-info" tabindex="5">Cancelar </a>
                <button  type="submit" class="btn btn-outline-success" > Guardar </button>
            </div>  
    </form>
@endsection