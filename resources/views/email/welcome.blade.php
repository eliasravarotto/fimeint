<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Mailer Demo</title>
</head>
 
<body>
Has recibido un contacto desde la página web 
<br>
    <b>Nombre:</b> {{$data->name}} <br>
    <b>Email:</b> {{$data->email}} <br>
    <b>Teléfono:</b> {{$data->telefono}} <br>
    <b>Mensaje:</b> {{$data->message}} <br>
<br>

</body>
</html>