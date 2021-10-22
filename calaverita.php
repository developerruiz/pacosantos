<?php   
    //Capturo los datos enviados por POST desde el formulario
    $destinatario               =  'calaverita2021@soypacosantos.com';

    $nombreCompleto      = $_REQUEST["nombre"];
    $edad                = $_REQUEST["edad"];
    $telefono            = $_REQUEST["telefono"];
    $email               = $_REQUEST["email"];
    $titulo              = $_REQUEST["titulo"];

    $desdEmail           = 'ivanrur95@gmail.com'; 
   
    //Construyo el cuerpo del mensaje    
    $message            = "Nombre: " . $nombreCompleto . "\n";
    $message            = $message . "Email: " . $email . "\n";
    $message            = $message . "edad: " . $edad . "\n";
    $message            = $message . "titulo: " . $titulo . "\n";
    $message            = $message . "telefono: " . $telefono . "\n";



   
    //Obtener datos del archivo subido 
    $file_tmp_name      = $_FILES['my_file']['tmp_name'];
    $file_name          = $_FILES['my_file']['name'];
    $file_size          = $_FILES['my_file']['size'];
    $file_type          = $_FILES['my_file']['type'];

       
    //Leer el archivo y codificar el contenido para armar el cuerpo del email
    $handle              = fopen($file_tmp_name, "r");
    $content             = fread($handle, $file_size);
    fclose($handle);
    $encoded_content     = chunk_split(base64_encode($content));
   
    $boundary            = md5("pera");
  
    //Encabezados
    $headers             = "MIME-Version: 1.0\r\n"; 
    $headers            .= "From:".$destinatario."\r\n"; 
    $headers            .= "Reply-To: ".$desdEmail."" . "\r\n";
    $headers            .= "Content-Type: multipart/mixed; boundary = $boundary\r\n\r\n"; 
           
    //Texto plano
    $body               = "--$boundary\r\n";
    $body               .= "Content-Type: text/plain; charset=ISO-8859-1\r\n";
    $body               .= "Content-Transfer-Encoding: base64\r\n\r\n"; 
    $body               .= chunk_split(base64_encode($message)); 
           
    //Adjunto
    $body               .= "--$boundary\r\n";
    $body               .="Content-Type: $file_type; name=".$file_name."\r\n";
    $body               .="Content-Disposition: attachment; filename=".$file_name."\r\n";
    $body               .="Content-Transfer-Encoding: base64\r\n";
    $body               .="X-Attachment-Id: ".rand(1000,99999)."\r\n\r\n"; 
    $body               .= $encoded_content; 
       
    $subject            = "CONCURSO CALAVERITAS LITERARIAS 2021";
    
    //Enviando el mail
    $sentMail = mail($destinatario, $subject, $body, $headers);
    if($sentMail){       
        echo "<script>alert('Tu calaverita se ha enviado correctamente, ¡Gracias por participar!')</script>";
            echo "<script> setTimeout(\"location.href='\concurso.php'\",1000)</script>";
    }else{
        echo "<h2>Se produjo un error y su pedido no pudo ser enviado</h2>";
    }  
?>