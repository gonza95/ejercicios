<?php
 $destino="contacto@gonzalogjuka.com";
 $nombre=$_POST["nombre"];
 $correo=$_POST["email"];;
 $mensaje=$_POST["consulta"];
 $asunto=$_POST["asunto"];
 
 $contenido="Nombre: ".$nombre."\nCorreo: ".$correo."\nMensaje: ".$mensaje. " \nAsunto: " .$asunto;
 mail($destino,"Contacto Pagina Web", $contenido);
 header("Location: confirma.html");

?>