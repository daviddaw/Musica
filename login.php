<?php
  include("config.php");
 
  
   session_start();
   	echo "invalido1"."<br>";
   if($_SERVER["REQUEST_METHOD"] == "POST") {
     
      
      $myusername = mysqli_real_escape_string($db,$_POST['username']);
      $mypassword = mysqli_real_escape_string($db,$_POST['password']); 
      
      $sql_login = "SELECT Email,LastName FROM customer WHERE Email = '$myusername' and LastName = '$mypassword'";
	  //echo $sql_login;
	
      $result = mysqli_query($db,$sql_login);
      //$row = mysqli_fetch_array($result,MYSQLI_ASSOC);
	  
	        // 2) Se reutilizará la pantalla de login del ejercicio anterior. Para validar a los clientes se utilizará
// como username el campor Email de la tabla Customer y como clave el campo LastName de
// la misma tabla.

      
      $count = mysqli_num_rows($result);
     echo "contador de filas = " . $count;
   	echo "invalido";
	 
	
	
      if($count == 1) {
         
         $_SESSION['login_user'] = $myusername;
         
         header("location: welcome.php");
      }else {
         $error = "Nombre o clave incorrectos  cero filas";
		
      }
   }
?>


<html>
   
   <head>
      <title>Pagina Inicial</title>
      
      <style type = "text/css">
         body {
            font-family:Arial, Helvetica, sans-serif;
            font-size:14px;
         }
         label {
            font-weight:bold;
            width:100px;
            font-size:14px;
         }
         .box {
            border:#666666 solid 1px;
         }
      </style>
      
   </head>
   
   <body bgcolor = "#FFFFFF">
	
      <div align = "center">
         <div style = "width:300px; border: solid 1px #333333; " align = "left">
            <div style = "background-color:#333333; color:#FFFFFF; padding:3px;"><b>Inicia Sesion</b></div>
				
            <div style = "margin:30px">
               
               <form action = " " method = "post">
                  <label>Correo Electronico :</label><input type = "text" name = "username" class = "box"/><br /><br />
                  <label>  Clave del usuario  :</label><input type = "password" name = "password" class = "box" /><br/><br />
                  <input type = "submit" value = " Acceder "/><br />
               </form>
               
               <div style = "font-size:11px; color:#cc0000; margin-top:10px"></div>
					
            </div>
				
         </div>
			
      </div>

   </body>
</html>