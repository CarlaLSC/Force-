<?php
    $nome=$_POST['nome'];
    $sobrenome=$_POST['sobrenome'];
    $email=$_POST['email'];
    $usuario=$_POST['usuario'];
    $nivel=$_POST['nivel'];
    $conteudo=$_POST['conteudo'];
    $senha= $_POst['senha'];

    $CONN= NEW MySQLi('localhost','root', '' ,'bd_empresa');
    if($CONN->connect_error){
        die("Falha de conexão".$CONN->connect_error);}

    $SQL="insert into aludo(nome, sobrenome, email, usuario, nivel, conteudo, senha)
    VALUES('$nome', '$sobrenome', '$email', '$usuario', '$nivel', '$conteudo', '$senha')";

    mysqli_query($CONN,$SQL);
    mysqli_close($CONN);

?>
