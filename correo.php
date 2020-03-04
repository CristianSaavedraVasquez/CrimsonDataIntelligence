<?php
  if(isset($_POST['enviar'])){
     if(!empty($_POST['nombre']) && !empty($_POST['correo']) && !empty($_POST['telefono']) && !empty($_POST['msg']) ){
       $nombre = $_POST['nombre'];
       $correo = $_POST['correo'];
       $telefono = $_POST['telefono'];
       $msg = $_POST['msg'];
       $header = "From: noreply@example.com". "\r\n";
       $header.= "Reply-To: noreple@example.com". "\r\n";
       $header.= "X-Mailer: PHP/". phpversion();
       $mail = @mail($nombre, $correo, $telefono, $msg, $header);
      if($mail) {
        echo "<h4>¡Formulario Enviado Exitosamente!</h4>";
      }
     }
  }
?>
