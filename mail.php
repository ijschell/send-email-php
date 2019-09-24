<?php 
echo 'lala';
break;
// OBTENGO LOS DATOS ENVIADOS DESDE EL FORMULARIO
// Los nombres deben ser exactamente iguales al "value" de los inputs del form.
$name = $_POST["name"];
$lastname = $_POST["lastname"];

// PREPARO CUERPO DE EMAIL
$message = "
    <p>Hola, este es un mensaje desde el formulario de contacto</p>
    <p>La persona ".$name." ".$lastname." quiere ponerse en contacto contigo.</p>
";

// DESTINATARIO
$to = "jschell.21.09.87@gmail.com";

// ASUNTO
$subject = "Asunto...";

// ENVÍO EL EMAIL
if(mail($to, $subject, $message)){
    echo "Se envío el correo.";
}else{
    echo "Ocurrió un error al envíar el correo.";
}


// TODO LO QUE IMPRIMAS EN ESTE PHP ES LO QUE SE VERÁ EN LA RESPUESTA AL ENVÍO DEL FORMULARIO
?>