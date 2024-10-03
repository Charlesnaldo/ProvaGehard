<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tela de Login</title>
    <link rel="stylesheet" href="style.css">
    <link rel="icon" href="./img/pesquisa.png" type="image/x-icon">
<link rel="shortcut icon" href="./img/pesquisa.png" type="image/x-icon">
</head>
<?php 
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email_correto = "charles.naldo@gmail.com";
    $senha_correto = "123456";

    // Sanitiza e obtém as entradas
    $nome = htmlspecialchars(trim($_POST['nome'] ?? ''));
    $email = htmlspecialchars(trim($_POST['email'] ?? ''));
    $senha = htmlspecialchars(trim($_POST['senha'] ?? ''));

    // Faz a verificação se a senha é igual a e email tambem
    if ($email === $email_correto && $senha === $senha_correto) {
        // Redireciona para a página desejada
        header("Location: pagina_bem_vindo.php?nome=" . urlencode($nome));
        exit(); // Certifique-se de usar exit após header()
    } else {
        header("Location: pagina_acessonegado.php?nome=" . urlencode($nome));
    }
}
?>