<?php
$host = 'localhost';
$user = 'root';
$password = '';
$db = 'sua_base';

$conn = new mysqli($host, $user, $password, $db);
if ($conn->connect_error) die("Erro: " . $conn->connect_error);

$result = $conn->query("SELECT id, especialidade FROM especialidades");
?>

<form>
    <label for="especialidade">Escolha a especialidade:</label>
    <select name="especialidade" id="especialidade">
        <?php while ($row = $result->fetch_assoc()): ?>
            <option value="<?= $row['id'] ?>"><?= htmlspecialchars($row['especialidade']) ?></option>
        <?php endwhile; ?>
    </select>
</form>

<?php $conn->close(); ?>