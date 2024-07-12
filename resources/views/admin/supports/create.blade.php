<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <h1>Nova Duvida</h1>
    <form action="{{ route('supports.store') }}" method="POST">
        @csrf()
        <input type="text" placeholder="Assunto" name="subject">
        <textarea name="body" cols="30" rows="5" placeholder="Descrição"></textarea>
        <button type="submit">Enviar</button>
    </form>
</body>

</html>
