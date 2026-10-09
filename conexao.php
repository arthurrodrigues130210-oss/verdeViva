<?php
// Conectar ao banco de dados
$conexao = mysqli_connect(
    "localhost",
    "root",
    "",
    "verdeViva",
    3307
);

if(!$conexao){
    die("ERRo ao conectar ao banco de dados.");
}

// Configura caracteres especias
mysqli_set_charset($conexao, "utf8mb4");

?>