<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Todos os card</h1>
    <table>
        <thead>
          <tr>
            <th>Segmento</th>
            <th>Assunto</th>
            <th>Data</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($cards as $card)
          <tr>
            <td>{{ $card->seguimento }}</td>
            <td>{{ $card->assunto }}</td>
            <td>{{ $card->data }}</td>
          </tr>
          @endforeach
        </tbody>
      </table>
      

</body>
</html>