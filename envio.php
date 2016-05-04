
          <?php

//Recibo las variables de formulario

$nombre = $_GET['nombre'];
$mail = $_GET['email'];
$fono = $_GET['fono'];
$mensaje = $_GET['mensaje'];

//Te muestro las variables


//Envio un email//

$aquien = "a.alfaro.avalos@gmail.com";
$asunto = "Has recibido un correo del sitio web";
$mensajemail = $nombre." a enviado un Email ".$mail. " con el fono ".$fono." y con el mensaje que dice : ".$mensaje ;


if(mail($aquien,$asunto,$mensajemail)){

echo "Tu email se ha enviado correctamente";

echo'<html>
<head>
<meta http-equiv="refresh" content="0;url=index.html">

</head>

</html>';

}else{
echo "El envio del mail ha fallado";
echo'<html>
<head>
<meta http-equiv="refresh" content="0;url=index.html">

</head>

</html>';
}




?>
         
          
          
                </div>
				
			</div>
			
                        
			<div class="cl">&nbsp;</div>
            
		</div>
    
    
    
    
    
    
		<!-- Three Column Content 
		
            
				
		END Three Column Content -->
		
		
	
			<div class="cl">&nbsp;</div>
			
            
				
				
		</div>
	
	<!-- END Main -->
    
    
	<!-- Footer -->
	<div id="footer">
		<p class="pie"> 2014 - It Services 
         </p>
		
        
    
		<div class="cl">&nbsp;</div>
	</div>
	<!-- END Footer -->
	<br />
</div>
</body>
</html>