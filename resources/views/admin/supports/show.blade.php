<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
        {{-- CSS DO BOOTSTRAP --}}
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Detalhes</title>
</head>

<body>
    <h1 class="ml-2">Detalhes da dúvida {{ $support->id }}</h1>
    <ul>
        <li>Assunto {{ $support->subject }}</li>
        <li>Status {{ $support->status }}</li>
        <li>Descrição {{ $support->body }}</li>
    </ul>
    <a href="{{route("index")}}" class="btn btn-secondary ml-3">Voltar</a>
</body>

</html>
