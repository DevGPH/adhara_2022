<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sin Stock</title>
    <style type="text/css">
        @media(prefers-color-scheme:dark) {
            body {
                background-color: #312c32;
                color: white;
            }
        }

        @media(prefers-color-scheme:light) {
            body {
                background-color: #ffffff;
                color: rgb(0, 0, 0);
            }
        }

    </style>
</head>

<body>
    <div style="width: 600px;display:block;margin:0px auto;padding:16px;">
        <img style="display: block; width: 150px;margin-bottom:30px;"
            src="https://www.adharaexpress.com.mx/images/adhara_email.png"
            alt="Adhara Express" />
        <h3 style="text-align: center;">Alguien se ha puesto en contacto con nosotros</strong></h3>
        <p>Nombre: {{ $this->data['nombre']}}</p>
        <p>Email: {{ $this->data['email']}}</p>
        <p>Asunto: {{ $this->data['asunto']}}</p>
        <p>Mensaje: {{ $this->data['mensaje']}}</p>
    </div>
</body>

</html>
