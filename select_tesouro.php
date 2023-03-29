?php

echo "<head>
<link href='https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css' rel='stylesheet' integrity='sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD' crossorigin='anonymous'>
</head>";

include_once("bd_tesouro.php");

$sql = "SELECT * FROM tesouro";
$result = mysqli_query($CONN, $sql);

if($result){
  
    echo "<table class = 'table table-striped'>
    <tr>
    <th>ID</th>
    <th>NOME</th>
    <th>QUESTÃO 1</th>
    <th>QUESTÃO 2</th>
    <th>QUESTÃO 3</th>
    <th>QUESTÃO 4</th>
    <th>QUESTÃO 5</th>
    <th>QUESTÃO 6</th>
    <th>QUESTÃO 7</th>
    <th>QUESTÃO 8</th>
    <th>QUESTÃO 9</th>
    <th>QUESTÃO 10</th>
    </tr>";

    while($linha = mysqli_fetch_array($result)){
     echo "<form action = 'bd_tesouro.php' method= 'POST'>
        <tr><td>".$linha["id"]."</td>
        <td>".$linha["nome"]."</td>
        <td>".$linha["q1"]."</td>
        <td>".$linha["q2"]."</td>
        <td>".$linha["q3"]."</td>
        <td>".$linha["q4"]."</td>
        <td>".$linha["q5"]."</td>
        <td>".$linha["q6"]."</td>
        <td>".$linha["q7"]."</td>
        <td>".$linha["q8"]."</td>
        <td>".$linha["q9"]."</td>
        <td>".$linha["q10"]."</td>
        </tr>

        <input type = 'hidden' name = 'id' value = '".$linha["id"]."'>
        </form>";
    }
    echo "</table>";
} else {
    echo "0 resultado";  
}


