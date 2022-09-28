
<?php
  /*
    Esto parece funcionar pero no funcionara en github porque github no permite
    ningun tipo de programacion en el lado del servidor.

    Luego intente usar mi archivo php desde un servidor externo en infinity free
    pero por la politica de seguiridad de cross-origin recibo el error HTTP 500
    para que esto funcione debe estar en el mismo dominio y servidor, lo guardo por aca
    para habilitarlo cuando lo publique en mi dominio propio y no en github.

    ojo: es posible que para utilizar esto con este tema tengamos que deshabilitar, ya sea por comentario o por eliminacion
    el archivo ./assets/vendor/php-email-form/validate.js
  */

  if(isset($_POST['submit']){
    $name = $_POST['name'];
    $mailFrom = $_POST['email'];
    $message = $_POST['message'];
    $subject = $_POST['subject'];

    $mailTo = "miguelsc10@hotmail.com";
    $headers = "From ".$mailFrom;
    $txt = "You have received an e-mail from ".$name."\n\n".$message;

    mail($mailTo, $subject, $txt, $headers);
    header("Location: index.html?mailsend");
  }
?>
