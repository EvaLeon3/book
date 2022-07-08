@extends('welcome')

@section('contenido')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header"> 
                        LIBROS REGISTRADOS
                        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                        <a href="{{ route('libro.create')}}" class="btn btn-outline-success" type="button"> Crear nuevo registro </a>
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
                                    <th>Titulo</th>
                                    <th>Autor</th>
                                    <th>Precio</th>
                                    <th colspan="2"> &nbsp;</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($libros as $libro)
                                <tr>
                                    <td>{{ $libro->id }} </td>
                                    <td>{{ $libro->titulo }} </td>
                                    <td>{{ $libro->autor }} </td>
                                    <td>{{ $libro->precio }} </td>
                                    <td>
                                        <a href="{{ route('libro.edit', $libro->id) }}" class="btn btn-primary btn-sm" type="button"> Editar</a>    
                                    </td>
                                    <td>
                                        <form action="{{ route('libro.destroy', $libro) }}" method="POST">
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