<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Cadastrar card</h1>

    <form action="{{route('cadastrar.card')}}" method="get">

        @csrf

        Seguimento: <input type="text" id="seguimento" name="seguimento" placeholder="Digite o seguimento..."> <br> <br>
        Assunto: <input type="text" id="assunto" name="assunto" placeholder="Digite o assunto..."><br> <br>
        data: <input type="text" id="data" name="data" placeholder="Digite a data da criação...">

        <input type="submit">
    </form>
</body>
</html>