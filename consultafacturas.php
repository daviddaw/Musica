<?php
 include('session.php');
?>
<html>
   
   <head>
      <title>Bienvenido </title>
   </head>
   
   <body>
      <h1>Facturas de   <?php echo $login_session; ?></h1> 
	  
	  
	
	  
	  
	  <?php
 

$id=$_SESSION["myId"];

//select * from invoice where CustomerId=1;

 $sql_lista = "SELECT * FROM invoice WHERE CustomerId = '$id' ";
 
  $result = mysqli_query($db,$sql_lista);
 
    // $count2 = mysqli_num_rows($result);
	$arr=array();
   //$arr[] = $result;
   


   $arr = $result;
   var_dump($arr);
   
   if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($fila = mysqli_fetch_assoc($result)) {//recorre la tabla almacenasda en memoria fila a fila
        echo "id Factura: " . $fila["InvoiceId"]. "    - id cliente: " . $fila["CustomerId"].     "        dato factura: " . $fila["InvoiceDate"]. "    - direccion factura: " . $fila["BillingAddress"]. "<br>";
		// select InvoiceDate from invoice where InvoiceDate='2009-08-06';
    }
} else {
    echo "No es ninguno";
}
 
 
 

?>
	  

	  
	  
	  
      <h2><a href = "logout.php">Cerrar Sesion</a></h2>
   </body>
   
</html>


