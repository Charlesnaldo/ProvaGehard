<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Acesso Negado</title>
    
    <!-- aqui direcionamento para o icone -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <!-- direcionamento para o CSS -->
    <link rel="stylesheet" href="./css/acessonegado.css">

    <!-- direcionamento para o favicon -->
    <link rel="icon" href="./img/pesquisa.png" type="image/x-icon">

</head>
<body>
    
<!-- Vídeo de fundo -->
<video autoplay muted loop id="bg-video">
    <source src="./videos/Virtual City Background Video HD - Compressed with FlexClip.mp4" type="video/mp4"> 
    Seu navegador não suporta vídeo.
</video>

<!-- 
Aqui começa o container de acesso negado com icone -->
<div class="login-container">
    <h2><i class="fas fa-exclamation-triangle"></i> ACESSO NEGADO!</h2>
    <p>Desculpe, usuário, você não tem permissão para acessar esta página.</p>
    <p>Por favor, verifique suas credenciais ou entre em contato com o administrador.</p>

    <!-- Botão de voltar para a página de login -->
    <a href="index.php" class="back-button">Voltar para a página de login</a>
</div>

</body>
</html>
