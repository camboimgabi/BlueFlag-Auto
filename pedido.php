<!DOCTYPE html>
<html>
<head>
    <title>Formulário de Pedido de Jaquetas</title>
</head>
<body>
    <h1>Formulário de Pedido de Jaquetas</h1>
    <form action="processar_pedido.php" method="post">
        <label for="equipe">Equipe:</label>
        <input type="text" name="equipe" id="equipe" required><br><br>

        <label for="tamanho">Tamanho:</label>
        <select name="tamanho" id="tamanho" required>
            <option value="P">P</option>
            <option value="M">M</option>
            <option value="G">G</option>
            <option value="GG">GG</option>
        </select><br><br>

        <label for="tecido">Tecido:</label>
        <input type="text" name="tecido" id="tecido" required><br><br>

        <label for="localidade">Localidade:</label>
        <input type="text" name="localidade" id="localidade" required><br><br>

        <input type="submit" value="Enviar Pedido">
    </form>
</body>
</html>
