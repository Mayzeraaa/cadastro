<?php
include "conexao.php";

$login = "admin";
$nome  = "Administrador";
$senha = password_hash("teste", PASSWORD_DEFAULT);

//$sql = "INSERT INTO usuarios (nome, login, senha) VALUES ('$nome', '$login', '$senha')";
$sql = "UPDATE usuarios SET senha = '$senha' WHERE login = 'admin'";

if (mysqli_query($conn, $sql)) {
    echo "Usuário cadastrado com sucesso!";
} else {
    echo "Erro: " . mysqli_error($conn);
}
?>