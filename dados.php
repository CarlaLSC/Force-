<?php
$nome=$_POST['nome'];
$telefone=$_POST['telefone'];
$cpf=$_POST['cpf'];
$Email=$_POST['email'];
$dataNascimento=$_POST['data'];
$escolaridade=$_POST['escolaridade'];
$sexo=$_POST['sexo'];

$CONN= NEW MySQLi('localhost','root', '' ,'bd_empresa');
if($CONN->connect_error){
    die("Falha de conexão".$CONN->connect_error);}
    $SQL="insert into funcionario(nome,cpf,dataNascimento,Email,escolaridade,sexo,telefone)
    VALUES('$nome','$cpf','$dataNascimento','$Email','$escolaridade','$sexo','$telefone')";

    mysqli_query($CONN,$SQL);
    mysqli_close($CONN);

    ?>
