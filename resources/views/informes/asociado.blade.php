<!DOCTYPE html>
<html>

<head>
    <title>Recibo de Recaudo</title>
    <style>
    body {
        font-family: Arial, sans-serif;
    }

    .container {
        width: 80%;
        margin: auto;
    }

    .header {
        text-align: center;
        margin-bottom: 50px;
    }

    .content {
        margin-bottom: 50px;
    }

    .footer {
        text-align: center;
    }
    </style>
</head>

<body>
    <div class="container">
        <div class="header">
            <h1>Recibo de Recaudo</h1>
        </div>
        <div class="content">
            <p>Fecha del Recaudo: {{ $recaudo['fecha_recaudo'] }}</p>
            <p>ID del Asociado: {{ $recaudo['asociado_id'] }}</p>
            <p>Nombre del Asociado: {{ $asociado->nombre }}</p>
            <p>Valor del Recaudo: {{ $recaudo['valor_recaudo'] }}</p>
        </div>
        <div class="footer">
            <p>Gracias por su recaudo.</p>
        </div>
    </div>
</body>

</html>