<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- CSS DO BOOTSTRAP --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Home</title>
</head>

<body>
    <h1 class="px-md-3">Listagem dos Suportes</h1>

    <a href="{{ route('supports.create') }} "class="px-md-3 btn btn-primary ml-3">Criar Dúvida</a>
    <table class="table"><br /><br />
        <thead>

            <th scope="col ">#</th>
            <th scope="col">Assunto</th>
            <th scope="col">Status</th>
            <th scope="col">Descrição</th>
            <th scope="col">Ações</th>
        </thead>
    <tbody>
        @foreach ($supports as $support)
        <tr>
            <td>{{ $loop->index+1}}</td>
            <td ><a  href="{{route('supports.show',$support->id)}}" class="btn info-btn">{{ $support->subject }}</a> </td>
            <td>{{ $support->status }}</td>
            <td>{{ $support->body }}</td>
            <td>
                <form action="{{route('supports.destroy',$support->id)}}"method="post" class="d-inline-block">
                    @csrf
                    @method("DELETE")
                    <button class=" btn info-bnt btn-secondary">Deletar</button>
                </form>
                
                <a href="{{route('supports.edit',$support->id)}}" class="ml-2 btn btn-info btn-secondary d-inline-block">Editar</a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
</body>

</html>
