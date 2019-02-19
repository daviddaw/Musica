<?php
    // session_start();
   include('session.php');
 
   
   $email=$login_session;
   
   $sql_id="select CustomerId from customer where Email='$email'";
  
  
   $result = mysqli_query($db,$sql_id);
   
   // $count2 = mysqli_num_rows($result);

   
   if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($fila = mysqli_fetch_assoc($result)) {//recorre la tabla almacenasda en memoria fila a fila
        // echo "id: " . $fila["idprovincia"]. " - Nombre: " . $fila["provincia"]. "<br>";
		$_SESSION["myId"]=$fila["CustomerId"];
		
    }
} else {
    echo "No es ninguno";
}
   

  
 
   
   
?>
<html>
   
   <head>
      <title>Welcome </title>
   </head>
   
   <body>
      <h1>Bienvenido <?php echo $login_session; ?></h1> 
	  
	  
	  <nav class="dropdownmenu">
  <ul>
    <li><a href="">Hacer Pedido</a></li>
    <li><a href="#">Mis Facturas</a>
      <ul id="submenu">
        <li><a href="consultafacturas.php">Consultar Facturas</a></li>
        <li><a href="consultafacturasfechas.php">Consultar Facturas por fechas</a></li>      </ul>
    </li>
    <li><a href="listadocanciones">Listado Canciones</a></li>
  
  </ul>
</nav>
	  
	  
	  
      <h2><a href = "logout.php">Cerrar Sesion</a></h2>
   </body>
   
</html>