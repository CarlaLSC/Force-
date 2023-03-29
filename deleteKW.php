<?php

$id = $_POST["id"];

include_once("bd.php");
$SQL = "DELETE FROM usuario WHERE id = $id";

if(mysqli_query($CONN,$SQL))
//echo "Deletado com sucesso!!!";
header('Location:./select_usuario.html.php');
else
//echo "Não deletado?!";
header('Location:./select_usuario.html.php');
mysqli_close($CONN);

?>
