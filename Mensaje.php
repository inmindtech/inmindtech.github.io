<?php


$destino = "mindtechcontacto@gmail.com";
$nombre = $_POST['nombre'];
$telefono = $_POST['telefono'];
$email = $_POST['email'];
$mensaje = $_POST['mensaje'];

$contenido = "Nombre: " . $nombre . "\nCorreo: " . $email . "\nTelefono: " . $telefono . "\nMensaje:" . $mensaje;

mail($destino,"Contacto desde Mind Tech", $contenido);

// echo '<script language="javascript">alert("Mensaje enviado correctamente");</script>'; 


// header('Location:Contact.html');


if(mail("mindtechcontacto@gmail.com","Contacto desde Mind Tech", $contenido ));
{
echo "Mensaje enviado correctamente";
}

// 
?>
