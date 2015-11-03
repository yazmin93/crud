<?php

include "../framework/aplication/Database.php";
$conditions = array(
	"conditions"=>"id=".$_GET["id"]
	);
$usuario = $db->find("usuarios", "first", $conditions);

?>

<form action="proceso.php" method="POST">
	<input type="hidden" name="id" value="<?php echo $usuario["id"]; ?>">
	<input type="hidden" name="edit">
	<p>Email <input type="text" name="email" value="<?php echo $usuario["email"]; ?>"></p>
	<p>Username <input type="text" name="username" value="<?php echo $usuario["username"]; ?>"></p>
	<p>Password <input type="text" name="password" value="<?php echo $usuario["password"]; ?>"></p>
	<p>Estatus <input type="number" name="status" value="<?php echo $usuario["status"]; ?>"></p>
	<p><input type="submit"></p>
</form>