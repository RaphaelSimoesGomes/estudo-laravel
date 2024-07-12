<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
</head>

<body>
    <h1>Listagem dos Suportes</h1>

    <a href="{{ route('supports.create') }}">Criar Dúvida</a>
    <table>
        <thead>
            <th>Assunto</th>
            <th>Status</th>
            <th>Descrição</th>
            <th></th>
        </thead>
    </table>
    <tbody>
        @foreach ($supports as $support)
        <tr>
            <td>{{ $support->subject }}</td>
            <td>{{ $support->status }}</td>
            <td>{{ $support->body }}</td>
            <td>
                <a href="{{route('supports.show',$support->id)}}">ir</a>
                <a href="{{route('supports.edit',$support->id)}}">Editar</a>
                
            </td><br>
        </tr>
        @endforeach
    </tbody>
</body>

</html>
