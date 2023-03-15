<?php


$nome = $_POST['nome'];
$senha = $_POST['senha'];

include_once("ConexaoKW.php");


$SQL = "SELECT * from aluno  where nome = '$nome' and senha = '$senha'";

$result = mysqli_query($CONN, $SQL);
$linha = mysqli_fetch_array($result);

if($linha){
    
    echo 'Usuario aceito';
   // $url = 'Location:./loginKW.html?msg=s';
    
}else{
    echo'Usuario não aceito';

    //$url = 'Location:./loginKW.html?msg=n';
}
    


//header($url);
//mysqli_query($conn, $sql);
mysqli_close($CONN);
