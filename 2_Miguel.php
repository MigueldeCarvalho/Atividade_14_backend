<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $titulo = $_POST['titulo'];
    $diretor = $_POST['diretor'];

    $conn = new mysqli("localhost", "usuario", "senha", "nome_do_banco");
    if ($conn->connect_error) die("Erro de conexão");

    $stmt = $conn->prepare("INSERT INTO filmes (titulo, diretor) VALUES (?, ?)");
    $stmt->bind_param("ss", $titulo, $diretor);
    $stmt->execute();
    $stmt->close();
    $conn->close();
}
?>