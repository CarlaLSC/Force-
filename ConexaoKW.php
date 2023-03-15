<?php
 

$CONN = NEW mysqli('localhost' , 'root' , '', 'bd_aluno');

if($CONN->connect_error){
    die("Falha na conexão" . $CONN->connect_error);

}

?>