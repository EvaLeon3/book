@extends('welcome')

@section('contenido')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header"> 
                        Municipos registrados
                    </div>
                    <!-- Button trigger modal -->
                    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                        <button type="button" 
                            class="btn btn-info" 
                            data-bs-toggle="modal" 
                            data-bs-target="#staticBackdrop">
                                Crear
                        </button>
                    </div>
                    @if($errors->any())
                        <div class="alert alert-danger">
                            @foreach($errors->all() as $error) - {{ $error }} <br>
                            @endforeach
                        </div>
                    @endif  
                 <!-- Modal -->
                    <div class="modal fade" id="staticBackdrop" 
                        data-bs-backdrop="static" 
                        data-bs-keyboard="false" 
                        tabindex="-1" 
                        aria-labelledby="staticBackdropLabel" 
                        aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" 
                                        id="staticBackdropLabel">
                                            Crear catalogo</h5>
                                    <button type="button" 
                                    class="btn-close" 
                                    data-bs-dismiss="modal" 
                                    aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <form 
                                        action="{{ route('catalogo.store')}}" 
                                        method="POST"
                                        enctype="multipart/form-data"
                                        class="container"
                                        >
                                        @csrf
                                        <select class="form-select" aria-label="Default select example" name="nombre">
                                                <option selected>Selecciona el municipio</option>
                                                @foreach($municipio as $municipio)
                                                    <option value="{{$municipio->nombre}}">{{$municipio->nombre}}</option>
                                                @endforeach
                                            </select> 
                                        <div class="col-auto">
                                            <label for="date" 
                                                _msthash="2228161" 
                                                 _msttexthash="254410"> Fecha   </label>
                                            <input type="date" id="fecha" name="fecha">
                                        </div>
                                        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                                            <a href="/catalogo" class="btn btn-info" tabindex="5">Cancelar </a>
                                            <button  type="submit" class="btn btn-outline-success" > Guardar </button>
                                        </div>  
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>                    
                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                       <table class="table">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Nombre</th>
                                    <th>Fecha</th>
                                    <th colspan="2"> &nbsp;</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($catalogo as $catalogo)
                                    <tr>
                                        <td>{{ $catalogo->id }} </td>
                                        <td>{{ $catalogo->nombre }} </td>
                                        <td>{{ $catalogo->fecha }} </td>
                                        <td>
                                            <a href="{{ route('catalogo.edit', $catalogo->id) }}" class="btn btn-primary btn-sm" type="button"> Editar</a> 
                                        </td>
                                        <td>
                                            <form action="{{ route('catalogo.destroy', $catalogo) }}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <input
                                                type="submit"
                                                value="Eliminar" class="btn btn-sm btn-danger"
                                                onclick="return confirm('¿Desea eliminar?')">
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                       </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection 