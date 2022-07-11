@extends('welcome')

@section('contenido')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header"> 
                        AUTORES REGISTRADOS
                        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                        <a href="{{ route('autor.create')}}" class="btn btn-outline-success" type="button"> Crear nuevo registro </a>
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