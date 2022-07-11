@extends('welcome')

@section('contenido')

<h2> Crear nuevo registro de libro </h2>
    <form 
        action="{{ route('libro.store')}}" 
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
                <label class="form-label"> Titulo</label>
                <input id="titulo" name="titulo" type="text" class="form-control" value="{{old('titulo')}}" placeholder="Ingrese el titulo del libro" >
            </div>
            <div class="form-group">
                <label class="form-label"> Precio</label>
                <input id="precio" name="precio" type="text" class="form-control" value="{{old('precio')}}" placeholder="Ingrese el precio del libro">
            </div>
            {{-- <div class="form-group">
                <label class="form-label"> Id del autor</label>
                <input id="autors_id" name="autors_id" type="text" class="form-control">
            </div> --}}

            <div class="form-group">
                <label class="form-label"> Escoger autor </label>
            <select class="form-select" aria-label="Default select example" name="autors_id">
                <option selected>Selecciona el autor</option>
                @foreach($autor as $autor)
                    <option value="{{$autor->id}}">{{$autor->nombre}}</option>
                @endforeach
            </select>
            </div>
            <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                <a href="/libro" class="btn btn-info" tabindex="5">Cancelar </a>
                <button  type="submit" class="btn btn-outline-success" > Guardar </button>
            </div>  
           
    </form>
@endsection