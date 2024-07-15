<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- CSS DO BOOTSTRAP --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Nova Duvida</title>
</head>

<body>
    <h1 class="ml-2">Nova Duvida</h1>

    @if ($errors->any())
        @foreach ($errors->all() as $error)
            {{ $error }}
        @endforeach
    @endif
    <form action="{{ route('supports.store') }}" method="POST">
        @csrf()
        <input type="text" placeholder="Assunto" name="subject" value="{{old('subject')}}" class="input-group-text ml-2 mb-2">
        <textarea name="body" cols="30" rows="5" placeholder="Descrição" class="form-control col-md-4 ml-2 mb-2"></textarea>
        <button type="submit" class="btn btn-primary btn-sml ml-2">Enviar</button>    <a href="{{route("index")}}" class="btn btn-secondary ">Voltar</a>
    </form>
</body>

</html>
