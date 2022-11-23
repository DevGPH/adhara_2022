<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Reserva Adhara Express</title>
    <style>
        thead tr th {
            border-top: 1px solid #b01b30; 
            border-bottom: 1px solid #b01b30; 
        } 
    </style>
</head>
<body>
    <div style="width: 800px;display:block;margin:0 auto;">
        <div style="padding:10px;">
            <img src="https://adharacancun.com/images/mail/head_express.png" alt="Adhara Express" style="margin-bottom:20px;">
            <p style="text-align: right;">Numero de Reservación #{{ $folio }}</p>
            <p style="text-align: right;">Reserva hecha en {{ $info['created_at']->format('F j, Y, g:i a') }}</p>
            <p style="text-align: right;">Titular de la reservación: {{ $info['nombre'] . ' ' . $info['apellidos'] }}</p>
            <p style="margin-left: 40px;">Confirmación de la reservación</p>
            <img src="https://adharacancun.com/images/mail/reserve.png" alt="Hotel Adhara Express" style="display:block;margin: 0 auto;margin-top:20px;margin-bottom:20px;">
            <div style="padding: 8px;border: 1px solid #b01b30;width: 600px;display: block;text-align: center;margin: 0 auto; margin-bottom:20px;">{{ $msg }}</div>
            <p style="margin-left: 40px;">Itinerario de viaje</p>
            <p style="letter-spacing: 1px;margin-bottom: 40px;margin-left: 40px;">{{ $msg_2 }}</p>
            
            <p style="margin-left: 40px;">Hotel Adhara Express</p>
            <p style="margin-bottom:5px;margin-left: 40px;">Av Yaxchilán 41,22,</p>
            <p style="margin-top: 0px;margin-bottom:5px;margin-left: 40px;">Cancún, Quintana Roo, Benito Juárez</p>
            <p style="margin-top: 0px;margin-bottom:50px;margin-left: 40px;">C.P. 77500</p>
            <table style="width: 700px;margin: 0 auto;">
                <thead>
                    <tr>
                        <th><p>Estancia</p></th>
                        <th><p>Huespedes</p></th>
                        <th><p>Tipo de Hab</p></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th>
                            <p style="margin-bottom:5px;text-align:left;font-weight:200;">Llegada: {{ $info['checkIn'] }}</p>
                            <p style="margin-bottom:5px;margin-top:5px;text-align:left;font-weight:200;">Salida: {{ $info['checkOut'] }}</p>
                            <p style="margin-bottom:0px;margin-top:5px;text-align:left;font-weight:200;">Noches: {{ $info['noches'] }}</p>
                        </th>
                        <th>
                            <p style="margin-bottom:5px;font-weight:200;">{{ $info['adultos'] }} Adultos</p>
                            <p style="margin-bottom:0px;margin-top:5px;font-weight:200;">{{ $info['infantes'] }} Niño</p>
                        </th>
                        <th>
                            <p style="margin-bottom:0px;font-weight:200;">{{ $info['habitacion'] }}</p>
                        </th>
                    </tr>
                </tbody>
            </table>
            <hr style="border-bottom-color: #b01b30;width:680px;">
            <p style="margin-left: 40px;">Plan de alimentos: {{ $info['plan_x_habitacion'] }}</p>
            <p style="margin-left: 40px;">Promoción vigente: Ninguna</p>
            <p style="margin-left: 40px;color: #b01b30;"><strong>Total de la reserva: {{ number_format($info['total']) }} MXN</strong></p>
            <hr style="border-bottom-color: #b01b30;width:680px;">
            <p style="margin-top: 50px;margin-left: 40px;">Condiciones de cancelación:</p>
            <p style="text-align: justify;margin-left: 40px;">Contamos con un periodo donde no aplican penalidades si cancelas tu reservación. Tome en cuenta que este periodo tiene una duración fija.</p>
            <p style="text-align: justify;margin-left: 40px;">En caso de que tengas que irte antes de que termine tu estancia (Salida anticipada), o no te presentes al hotel (Conocido como no show) se considera como cancelación y no aplican reembol-sos. Si reduce el número de huéspedes una vez pagada la reser-vación, no es reembolsable.</p>
            <p style="margin-bottom:50px;text-align: justify;margin-left: 40px;">Temporada  Baja  cancelación  sin  penalidad  4 días antes de la llegada / Temporada  Alta  cancelación  sin  penalidad  7 días  antes  de la llegada.
            En caso de estar  dentro de las políticas de penalidad  la  penalidad  es  total. 
            Consulta   fechas  de temporadas.</p>
            <hr style="border-bottom-color: #b01b30;width:680px;">
            <p style="margin-top:50px;margin-left: 40px;">Muchas gracias por reservar con nosotros.</p>
            <p style="margin-left: 40px;">Para cualquier pregunta referente a su reservación favor de contactarnos.</p>
            <p style="margin-left: 40px;">Teléfono: +52 998 8816500</p>
            <p style="margin-left: 40px;">e-mail: reservaciones@gphoteles.com</p>
            <p style="margin-left: 40px;">Whatsapp: +52 998 1221861</p>
        </div>
        <ul style="list-style: none;display: flex;margin-left: 200px;padding-left: 0px;">
            <li style="margin-right: 10px;">
                <a href="https://www.facebook.com/AdharaExpress" target="_blank" style="text-decoration: none;color:black;">
                    <img src="https://adharacancun.com/images/mail/face_express.png" style="margin-right: 5px;" />Adhara Expres
                </a>
            </li>
            <!--li style="margin-right: 10px;">
                <a href="https://www.facebook.com/AdharaExpress" target="_blank" style="text-decoration: none;color:black;">
                    <img src="https://adharacancun.com/images/mail/twitter.png" style="margin-right: 5px;" />@AdharaExpress
                </a>
            </li-->
            <li>
                <a href="https://www.instagram.com/adharaexpress/" target="_blank" style="text-decoration: none;color:black;">
                    <img src="https://adharacancun.com/images/mail/insta_express.png" style="margin-right: 5px;" />AdharaExpress
                </a>
            </li>
        </ul>
    </div>
</body>
</html>