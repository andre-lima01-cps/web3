<?php
include 'bd/conexao.php';

$filtroCampo = isset($_GET['campo']) ? $_GET['campo'] : '';
$filtroCampo = trim($filtroCampo);
$filtroTexto = isset($_GET['texto']) ? $_GET['texto'] : '';
$filtroTexto = trim($filtroTexto);

$colunasPermitidas = ['nome', 'email', 'role'];

$usuarios = [];

if ($filtroTexto !== '' && in_array($filtroCampo, $colunasPermitidas, true)) {
    $campoSeguro = $filtroCampo;
    $query = "SELECT id, nome, email, role, created_at, updated_at FROM usuarios WHERE $campoSeguro LIKE ?";
    $stmt = $conn->prepare($query);

    if ($stmt) {
        $param = "%" . $filtroTexto . "%";
        $stmt->bind_param('s', $param);
        $stmt->execute();
        $result = $stmt->get_result();

        while ($row = $result->fetch_assoc()) {
            $usuarios[] = $row;
        }

        $stmt->close();
    }
} else {
    $query = "SELECT id, nome, email, role, created_at, updated_at FROM usuarios";
    $result = $conn->query($query);

    if ($result) {
        while ($row = $result->fetch_assoc()) {
            $usuarios[] = $row;
        }
    }
}

header('Content-Type: application/json; charset=utf-8');
echo json_encode($usuarios);

$conn->close();
?>