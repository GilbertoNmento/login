<!DOCTYPE html>
<html>
<head>
    <title>Dashboard</title>
    <style>
        /* Estilos CSS para o dashboard */
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }
        
        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
        }
        
        .dashboard-header {
            background-color: #333;
            color: #fff;
            padding: 20px;
            text-align: center;
        }
        
        .dashboard-content {
            background-color: #fff;
            padding: 20px;
        }
        
        .dashboard-card {
            background-color: #f9f9f9;
            border-radius: 4px;
            padding: 20px;
            margin-bottom: 20px;
        }
    </style>
</head>
<body>
    
    <div class="container">
        <div class="dashboard-header">
            <h1>Dashboard</h1>
        </div>
        <div class="dashboard-content">
            
            <button><a href="{{route('cadastro.card')}}">Criar card</a></button>

            <button> <a href="{{route('Card.cadastrado')}}">Visualizar todos os Cards </a></button>
        </div>
    </div>
</body>
</html>
