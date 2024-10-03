<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Acesso Negado</title>
    <link rel="stylesheet" href="./css/acessonegado.css">
    <link rel="icon" href="./img/pesquisa.png" type="image/x-icon">

</head>
<body>
    
<!-- Vídeo de fundo -->
<video autoplay muted loop id="bg-video">
    <source src="./videos/Virtual City Background Video HD - Compressed with FlexClip.mp4" type="video/mp4"> 
    Seu navegador não suporta vídeo.
</video>

<div class="login-container">
    <h2>ACESSO NEGADO!</h2>

    <!-- Script Php para puxar o nome  -->
    <?php $nome = isset($_GET['nome']) ? htmlspecialchars($_GET['nome']) : 'usuário';
        ?>
    <p>Desculpe <?php echo $nome; ?>, você não tem permissão para acessar esta página.</p>
    <p>Por favor, verifique suas credenciais ou entre em contato com o administrador.</p>

    <!-- Botão de voltar para pagina de login -->
    <a href="index.php" class="back-button">Voltar para a página de login</a>
</div>

</body>
</html>
