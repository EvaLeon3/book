@extends('welcome')

@section('contenido')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header"> 
                        AUTORES REGISTRADOS
                        {{-- <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                        <a href="{{ route('autor.create')}}" class="btn btn-outline-success" type="button"> Crear nuevo registro </a>
                        </div> --}}
                    
                <!-- Button trigger modal -->
                <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                    <button type="button" class="btn btn-info" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                        Crear
                    </button>
                </div>
                </div>
                    @if($errors->any())
                        <div class="alert alert-danger">
                            @foreach($errors->all() as $error) - {{ $error }} <br>
                            @endforeach
                        </div>
                    @endif  
                    <!-- Modal -->
                    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                        <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                            <h5 class="modal-title" id="staticBackdropLabel">Modal title</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <form 
                                action="{{ route('autor.store')}}" 
                                method="POST"
                                enctype="multipart/form-data"
                                class="container"
                            >
                                @csrf
                                
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
                                    <div class="d-grid gap-2 d-md-flex justify-content-md-end modal-footer">
                                        <a href="/autor" class="btn btn-info" tabindex="5">Cancelar </a>
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
                                    <th>Apellido</th>
                                    <th>Fecha de nacimiento</th>
                                    <th colspan="2"> &nbsp;</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($autores as $autor)
                                <tr>
                                    <td>{{ $autor->id }} </td>
                                    <td>{{ $autor->nombre }} </td>
                                    <td>{{ $autor->apellido}} </td>
                                    <td>{{ $autor->fecha }} </td>
                                    <td>
                                        <a href="{{ route('autor.edit', $autor->id) }}" class="btn btn-primary btn-sm" type="button"> Editar</a>    
                                    </td>
                                    <td>
                                        <form action="{{ route('autor.destroy', $autor) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <input
                                            type="submit"
                                            value="Eliminar" class="btn btn-sm btn-danger"
                                            onclick="return confirm('¿Desea eliminar?')"
                                            >
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