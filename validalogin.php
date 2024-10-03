<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página de Boas Vindas</title>
    <link rel="stylesheet" href="./css/validalogin.css">
    <link rel="icon" href="./img/pesquisa.png" type="image/x-icon">
</head>
<body>

    <!-- Vídeo de fundo -->
    <video autoplay muted loop id="bg-video">
        <source src="./videos/Virtual City Background Video HD - Compressed with FlexClip.mp4" type="video/mp4"> 
        Seu navegador não suporta vídeo.
    </video>
    
    <div class="info-container">
        <?php 
            // Captura o nome do usuário da URL
            $nome = isset($_POST['nome']) ? htmlspecialchars($_POST['nome']) : 'usuário';
        ?>
        <h2>Seja bem-vindo, <span class="nome-destaque"><?php echo $nome; ?></span></h2>
        
        <h2>Você Deseja obter cotações de NOTEBOOK ou DESKTOP?</h2>
        <p>Clique na imagem para mais informações :</p>
        
        <div class="image-links">
            <a href="notebook_info.php">
                <img src="./img/Notebook.png" alt="Notebook" class="device-image">
            </a>
            <a href="desktop_info.php">
                <img src="./img/desktop.png" alt="Desktop" class="device-image">
            </a>
        </div>

        <!-- Botão de voltar ao login -->
        <a href="index.php" class="back-button">Voltar ao Login</a>  
    </div>
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
        // Certifique-se de usar exit após header()
    } else {
        header("Location: pagina_acessonegado.php?nome=" . urlencode($nome));
    }
}
?>
</body>
</html>
