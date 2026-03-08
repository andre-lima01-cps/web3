<?php
include 'bd/conexao.php';

$query = "SELECT id, nome, email, role, created_at, updated_at FROM usuarios";
$result = $conn->query($query);

$usuarios = [];

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        $usuarios[] = $row;
    }
}

echo json_encode($usuarios);

$conn->close();
?>