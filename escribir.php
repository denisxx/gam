<?php 
	$col  = $_POST['col'];
	$fila = $_POST['fila'];
	$id_j   = $_POST['id_j'];
	$id_g   = $_POST['id_g'];
	
	$datos['fila']  = $fila; 
	$datos['col']   = $col;	
	$datos['id_j']  = $id_j;

	file_put_contents($id_g, json_encode($datos)."\n");
	echo json_encode($datos);


?>