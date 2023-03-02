<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/app.css">
    <title>Pessoas</title>
</head>

<body>

    <div class="container mt-5 ">

        <div class="d-flex justify-content-end mb-2">
            <div class="row">
                <div class="col-3">
                    <button class="btn btn-dark btn-sm"><i></i>Adicionar</button>
                </div>

            </div>
        </div>

        <table class="table table-dark table-hover table-borderless">
            <thead>
                <tr>
                    <th scope="col">CPF</th>
                    <th scope="col">Nome</th>
                    <th scope="col">Data Nasc.</th>
                    <th scope="col"></th>
                </tr>
            </thead>

            @foreach ( $pessoas as $pessoa)
            <tbody>
                <tr class="table-info">
                    <td>{{$pessoa->cpf}}</td>
                    <td>{{$pessoa->nomepessoa}}</td>
                    <td>{{$pessoa->dtnasc}}</td>
                    <td>actions</td>
                </tr>
            </tbody>

            @endforeach
        </table>
    </div>


</body>

</html>
