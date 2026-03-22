<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Usuários</title>
</head>
<body>
    <h1>Lista de Usuários</h1>
    <table border='1'>
    <?php
    // Inicia o buffer de saída para capturar o conteúdo gerado pela consulta_bd.php
    ob_start();

    // Inclui o arquivo de consulta que gera a saída JSON dos usuários
    include 'backend/consulta_bd.php';

    // Captura o conteúdo gerado pela consulta_bd.php
    $data = ob_get_clean();
    
    // Decodifica o JSON para um array associativo
    $usuarios = json_decode($data, true);

    echo "<tr><th>ID</th><th>Nome</th><th>Email</th><th>Role</th><th>Created At</th><th>Updated At</th></tr>";
    foreach ($usuarios as $user) {
        echo "<tr><td>{$user['id']}</td><td>{$user['nome']}</td><td>{$user['email']}</td><td>{$user['role']}</td><td>{$user['created_at']}</td><td>{$user['updated_at']}</td></tr>";
    }
    ?>
    </table>
</body>
</html>