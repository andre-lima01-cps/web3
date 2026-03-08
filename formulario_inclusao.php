<!DOCTYPE html>
<html>
<head>
    <title>Incluir Usuário</title>
</head>
<body>
    <h1>Incluir Novo Usuário</h1>
    <form action="backend/incluir.php" method="post">
        Nome: <input type="text" name="nome" required><br><br>
        Email: <input type="email" name="email" required><br><br>
        Senha Hash: <input type="text" name="senha_hash" required><br><br>
        Role: <select name="role" required>
            <option value="">Selecione um role</option>
            <option value="CLIENTE">CLIENTE</option>
            <option value="ATENDENTE">ATENDENTE</option>
            <option value="ADMINISTRADOR">ADMINISTRADOR</option>
        </select><br><br>
        <input type="submit" value="Incluir Usuário">
    </form>
</body>
</html>