<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>ESPIS- Proyecto DIUDA 2016</title>
<link rel="stylesheet" type="text/css" href="style.css"/>
<link href='http://fonts.googleapis.com/css?family=Raleway:400,200,300,600,700,800' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,800,600,300,200' rel='stylesheet' type='text/css'>
<link href="css/font-awesome.min.css" rel="stylesheet" media="screen">
<link href="css/responsive.css" rel="stylesheet" media="screen" type="text/css"/>
<link rel="stylesheet" href="sidr/stylesheets/jquery.sidr.dark.css">
<script src="js/jquery.min.js"></script>
<script src="sidr/jquery.sidr.min.js"></script>
<script type="text/javascript" src="js/smoothscroll.js"></script>

</head>

<body>
	<div class="header">
    	<div class="container">
    		
           
  <!--Logo------------------------------------------------------------------------------------------------------------------------------->          
       
  <!--Logo------------------------------------------------------------------------------------------------------------------>  
 <div class="banner2">
    	<div class="container">
        	<div class="header-text">
            	<img src="images/LOGO_3.png"/>
            	
        </div>
    </div>
  </div>  
    <div class="color-border"  >
    </div>
  
    
    
  <!--Resumen------------------------------------------------------------------------------------------------>  
    <div class="stories2" id="stories2">
    	
        <div class="container">
    
        <h3 class="text-head">Gracias!!!</h3>
          <p><br /></p>
          <?php

//Recibo las variables de formulario

$nombre = $_GET['nombre'];
$mail = $_GET['email'];

$mensaje = $_GET['mensaje'];

//Te muestro las variables


//Envio un email//

$aquien = "andres.alfaro@uda.cl";
$asunto = "Has recibido un correo del sitio web";
$mensajemail = $nombre." a enviado un Email ".$mail. " y con el mensaje que dice : ".$mensaje ;


if(mail($aquien,$asunto,$mensajemail)){

echo "<p>Tu Email se ha enviado Correctamente, nos contactaremos a la brevedad</p>";

echo'<html>
<head>
<a href="index.html">Volver</a>

</head>

</html>';

}else{
echo "El envio del mail ha fallado, vuelve a intentarlo  ";
echo'<html>
<head>
<a href="index.html">Volver</a>

</head>

</html>';
}




?>
         
        	
        </div>
    </div>
  
   
  	
 
  
   <div class="color-border">
    </div>
   
  
            </div>
        </div>
        
        
  
