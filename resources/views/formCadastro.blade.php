<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    <h1>Tela de cadastro</h1>

    <form action="{{route('cadastrar.usuario')}}" method="get">

        @csrf

        Cpf: <input type="text" id="cpf" name="cpf" placeholder="Digite seu CPF">
        Senha: <input type="password" name="senha" id="senha" placeholder="Digite sua senha">
       <input type="submit">
        

    </form>

    
    
</body>
</html>