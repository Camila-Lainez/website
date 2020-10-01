<?php

  $destino= "ministeriojehovasama4@gmail.com"
  $nombre= $-POST["nombre"];
  $nombre= $-POST["correo"];
  $nombre= $-POST["telefono"];
  $nombre= $-POST["mensaje"];
  $contenido= "Nombre:" . $nombre . "\nCorreo: " . $correo . "\nTelefono:"  . $telefono. "\nMensaje:" . $mensaje;
  mail($destino,"Contacto", $contenido);
  header("Location:gracias.html");
  ?>