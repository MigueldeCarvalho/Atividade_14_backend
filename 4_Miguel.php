<?php
$host = 'localhost';
$user = 'root';
$password = '';
$db = 'sua_base';

$conn = new mysqli($host, $user, $password, $db);
if ($conn->connect_error) die("Erro: " . $conn->connect_error);

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['palavra'])) {
    $palavra = trim($_POST['palavra']);

    if (!empty($palavra)) {
        $stmt = $conn->prepare("INSERT INTO palavras (palavra) VALUES (?)");
        $stmt->bind_param("s", $palavra);

        if ($stmt->execute()) {
            echo "Palavra inserida com sucesso!";
        } else {
            echo "Erro ao inserir: " . $stmt->error;
        }

        $stmt->close();
    } else {
        echo "A palavra não pode ser vazia.";
    }
}

$conn->close();
?>