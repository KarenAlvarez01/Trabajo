<?php
 $conv=$_POST["conv"];
 if (isset($_POST["monto"])) {
 	define("cantidad", $_POST["monto"]);
 }else{

 }
 echo "Son ";
  if ($conv==1) {
  	echo cantidad *29;
  	echo "Dollar";
  	# code...
  }else{
  	echo cantidad/29;
  	echo "Cordoba ";
  }
 	# code...
 
?>
