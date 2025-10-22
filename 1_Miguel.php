<?php
session_start();
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $_SESSION['usuario'] = $_POST['nome'];
}
?>


<?php
    if (isset($_SESSION['usuario'])) {
        echo "<h1>Bem-vindo, " . htmlspecialchars($_SESSION['usuario']) . "!</h1>";
    }
    ?>
