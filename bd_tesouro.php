<?php


$CONN = NEW mysqli('localhost' , 'root' , '','bd_tesouro');

if($CONN->connect_error){
    die("Falha na conexão" . $CONN->connect_error);

}

?>
