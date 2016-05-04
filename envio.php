
          <?php

//Recibo las variables de formulario

$nombre = $_GET['nombre'];
$mail = $_GET['email'];
$fono = $_GET['fono'];
$mensaje = $_GET['mensaje'];

//Te muestro las variables

echo "<h3>El mensaje que has enviado es:</h3>";
echo "<br />";
echo "<p>Nombre: ";
echo $nombre;
echo "<br />";
echo "Email: ";
echo $mail;
echo "<br/>";
echo "Fono:";
echo $fono;

echo "<br />";
echo "Mensaje: ";
echo $mensaje;
echo "</p>";

//Envio un email//

$aquien = "lgonzalez@itservices.cl";
$asunto = "Has recibido un correo del sitio web";
$mensajemail = $nombre." a enviado un Email ".$mail. " con el fono ".$fono." y con el mensaje que dice : ".$mensaje ;


if(mail($aquien,$asunto,$mensajemail)){

echo "Tu email se ha enviado correctamente";

}else{
echo "El envio del mail ha fallado";
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