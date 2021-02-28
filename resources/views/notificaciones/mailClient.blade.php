<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <style>
        body {
            font-family: Georgia, 'Times New Roman', Times, serif;
            background-color: #d7dde4;
            vertical-align: middle;
        }
        .contenedor {
            padding: 10px;
            margin: auto;
            width: 400px;
            height: auto;
            background-color: #eee;
            text-align: center;
        }
        table {
            border-radius: 5px;
            background-color: rgba(255, 255, 255, 0.5);
            color: rgba(255, 255, 255, 0.5);
        }
        .encabezado {
            width: 50%;
            height: 135px;
            background-color: #fff0;
            font-size: 20px;
            border-radius: 6px;
            background-repeat: no-repeat;
            background-size: contain;
        }
        tbody tr td {
            width: 100%;
            height: 100px;
            text-align: center;
            vertical-align: middle;
            border: 1px solid #ccc;
            color: #74787e;
            border-radius: 5px;
        }
        .parrafo {
            padding: 10px;
            text-align: left;
        }
    </style>
</head>
<body>
    {{ csrf_field() }}
    <div class="contenedor">
        <table>
            <thead>
                <tr>
                    <td class="encabezado">
                        <p>mensale de programando</p>
                    </td>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td class="parrafo">
                        <p>Estimado(a) {{ $contact->name }}:</p>
                        Hemos recibido tu mensaje y te daremos respuesta en menos de 12 horas.
                        <p>El mensaje que enviaste fué:</p>
                        {{ $contact->description }}
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</body>

</html>
