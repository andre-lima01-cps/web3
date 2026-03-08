<?php
include 'bd/conexao.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha_hash = $_POST['senha_hash'];
    $role = $_POST['role'];

    // Debug: echo received data
    echo "Dados recebidos: Nome: $nome, Email: $email, Senha Hash: $senha_hash, Role: $role<br>";

    // Validação do role
    $valid_roles = ['CLIENTE', 'ATENDENTE', 'ADMINISTRADOR'];
    if (!in_array(strtoupper($role), $valid_roles)) {
        echo "Erro: Role inválido. Deve ser CLIENTE, ATENDENTE ou ADMINISTRADOR.";
        $conn->close();
        exit;
    }

    // Insert query
    $stmt = $conn->prepare("INSERT INTO usuarios (nome, email, senha_hash, `role`, created_at, updated_at) VALUES (?, ?, ?, ?, NOW(), NOW())");
    $stmt->bind_param("ssss", $nome, $email, $senha_hash, $role);

    if ($stmt->execute()) {
        echo "Usuário inserido com sucesso";
    } else {
        echo "Erro: " . $stmt->error;
    }

    $stmt->close();
}

$conn->close();
?>