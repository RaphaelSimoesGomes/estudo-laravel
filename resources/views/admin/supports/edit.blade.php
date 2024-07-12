<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Editar {{$support->id}}</title>
</head>

<body>
    <h1>Duvida {{ $support->id }}</h1>
    <form action="{{ route('supports.update', $support->id) }}" method="POST">
        @csrf() 
        @method('PUT')
        <input type="text" placeholder="Assunto" name="subject" value="{{ $support->subject }}">
        <textarea name="body" cols="30" rows="5" placeholder="Descrição">{{$support->body}}</textarea>
        <button type="submit">Enviar</button>
    </form>
</body>

</html>
