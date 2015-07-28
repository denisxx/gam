<?php
	ini_set('display_errors', 1);
	error_reporting(E_ALL);

	$archivoPrincipal = "principal.txt";
	
	$peticion  = $_POST['peticion'];
	
	


	if($peticion)
	{ //generar id_g

		if(!file_exists($archivoPrincipal))
		{
			$nueva_data["id_g"] =  1000;
			$nueva_data["users"] = 0;
			file_put_contents($archivoPrincipal ,json_encode($nueva_data)."\n", FILE_APPEND | LOCK_EX);	

		}	




		$data = file($archivoPrincipal);
		$linea = $data[count($data)-1];
		$datos = json_decode($linea,true);
		if($datos["users"] > 1)
		{
			$id_g = $datos["id_g"];
			$id_g++;
			$nueva_data["id_g"] =  $id_g;
			$nueva_data["users"] = 1;

			file_put_contents($archivoPrincipal ,json_encode($nueva_data)."\n", FILE_APPEND | LOCK_EX);	
			echo json_encode($nueva_data);
		}
		else
		{
			$datos["users"]++;
			$id_g = $datos["id_g"];
			file_put_contents($archivoPrincipal ,json_encode($datos)."\n", FILE_APPEND | LOCK_EX);
			echo json_encode($datos);
		}	
	
	}



	


?>