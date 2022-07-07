<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Libro</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header"> 
                        VISTA DE LIBROS AGREGADOS
                    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                        <button href="book.create" class="btn btn-primary me-md-2" type="button"> Agregar Libro</button>
                      </div>
                    </div>
                
                    {{-- <div class="card-header"> 
                        Libro 
                        <button type="button" class="btn btn-outline-primary">Primary</button>
                    </div> --}}
                       {{--  <a href="{{ route('book.create')}}" class="btn btn-sm btn-primary" > Crear </a> --}}
                    
    
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
                               {{--  <th colspan="2"> &nbsp;</th> --}}
                            </tr>
                        </thead>
                       {{--  <tbody>
                            @foreach ($posts as $post)
                            <tr>
                            <td>{{ $post->id }} </td>
                            <td>{{ $post->title }} </td>
                            <td>
                            <a href="{{ route('book.edit', $post->id) }}" class="btn-primary btn-sm"> Editar</a>    
                            </td>
                            <td>
                                <form action="{{ route('book.destroy', $post) }}" method="POST">
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
                        </tbody> --}}
                       </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>