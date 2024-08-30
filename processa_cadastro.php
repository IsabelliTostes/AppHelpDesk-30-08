<?php
$servername="localhost";

$username="root";

$password="";

$db_name="usuarios2";

$conn= new mysqli ($servername, $username, $password, $db_name);


if ($conn->connect_error) {
die ("Falha na conexão!" . $conn->connect_error);
}

$email = $_POST ['email'];
$senha = password_hash ($_POST['senha'], PASSWORD_DEFAULT);


$sql = "INSERT INTO usuarios2 (nome, email, senha) 
VALUES('$email','$senha')";


if ($conn->query($sql)===TRUE){
    echo "Usuario cadastrado com sucesso!";
} else {
    echo "Erro: " . $sql . "<br>" . $conn->error;
    
}

$conn->close();

?>