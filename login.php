<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blue Flag Auto</title>
    <link rel="icon" type="img" href="logo7.png">
</head>
<body>
<form method="post" name="meu_form"  >
        <label for="nome">Nome Completo:</label><br>
        <input type="text" name="nome"><br><br>

        <label for="email">E-mail:</label><br>
        <input type="text" name="email"><br><br>
       
        <label for="senha">Idade:</label><br>
        <input type="password" name="senha"><br><br>

        <label for="local">Localidade</label><br>
        <input type="radio" name="local" value="Masculino">
        <label for="masculino">Masculino</label><br>
        <input type="radio" name="local" value="Feminino">
        <label for="feminino">Feminino</label><br>
        <input type="radio" name="local" value="Outro">
        <label for="outro">Outro</label><br><br>

        <input type="submit" value="Enviar">
        <input type="reset" value="Limpar Dados">

        <?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $senha = $_POST["senha"];
    $local = $_POST["local"];
}
    ?>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $senha = $_POST["senha"];
    $local = $_POST["local"];
   
    require_once("conexão.php");

    try {
     
        $stmt = $pdo->prepare("INSERT INTO tb_usuario (nm_usuario, us_email, us_senha, us_localidade) VALUES (?, ?, ?, ?)");
        $stmt->execute([$nome, $email, $senha, $local]);
        echo "Dados inseridos com sucesso!";
        die ();
    } catch (PDOException $e) {
        echo "Erro ao inserir dados no banco de dados: " . $e->getMessage();
    }
}
?>



</form>
        </body>
</html>
