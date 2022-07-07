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
        <h2> Crear nuevo registro de libro </h2>

        <form 
            action="{{ route('book.store') }}" 
            method="POST"
            enctype="multipart/form-data"
            >
            @csrf
            @if($errors->any())
                <div class="alert alert-danger">
                    @foreach($errors->all() as $error)
                    - {{ $error }} <br>
                    @endforeach
                </div>
            @endif
            <div class="form-group">
                <label > User id </label>
                <input id="user_id" name="user_id" type="text" class="form-control" value="{{old('user_id')}}" >
            </div>
            <div class="form-group">
                <label> Title </label>
                <input id="title" name="title" type="text" class="form-control" value="{{old('title')}}">
            </div>
            <div class="form-group">
                <label> Image </label>
                <input name="file" type="file">
            </div>
            <div class="form-group">
                <label > Contenido </label>
                <input id="body" name="body" type="text" class="form-control" value="{{old('body')}}">
            </div>
            <div class="form-group">
                <label> Contenido embebido </label>
                <input id="iframe" name="iframe" type="text" class="form-control" value="{{old('iframe')}}">
            </div>
            <a href="/book" class="btn btn-secondary" tabindex="5">Cancelar </a>
            <button type="submit" class="btn bton-primary" > Guardar </button>
            
        </form>

    </body>

</html>