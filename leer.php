<?php 

	$id_j   = $_POST['id_j'];
	$id_g   = $_POST['id_g'];

	 
	$data = file($id_g);	
	$linea = $data[count($data)-1];
	echo $linea;
	
?>