<?php

include "../framework/aplication/Database.php";
if($_POST){

	$table = "usuarios";
	//$db = new ClassPDO();
	if (isset($_POST["add"])){
		if ($db->save($table, $_POST)) {
			echo "Datos guardados correctamente";
		}else{
			echo "Error al guardar los datos";
		}
		
	
	}elseif (isset($_POST["edit"])){
		if ($db->update("usuarios", $_POST)) {
			echo "Datos actualizados correctamente";
		}else{
			echo "Error al actualizar los datos";
		}

	}
}

if($_GET){
	if(isset($_GET["del"])){
			$conditions = "id=".$_GET["id"];
			if ($db->delete("usuarios", $conditions)) {
				echo "Datos eliminados correctamente";
			}else{
				echo "Error al eliminar los datos";
			}
		
		//print_r($_POST);
	}
}