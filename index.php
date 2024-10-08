<?php
session_start(); // Inicia a sessão
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Titulo da pagina -->
    <title>Tela de Login</title>
    <!-- link para o CSS -->
    <link rel="stylesheet" href="./css/styleindex.css">
    <!-- Fiveicon -->
    <link rel="icon" href="./img/pesquisa.png" type="image/x-icon">
    <!-- icones de dentro do label  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
   
    
</head>
<body>

 <!-- Vídeo de fundo -->
 <video autoplay muted loop id="bg-video">
        <source src="./videos/Virtual City Background Video HD - Compressed with FlexClip.mp4" type="video/mp4"> 
        Seu navegador não suporta vídeo.
    </video>
 <!-- Vídeo de fundo -->


<!-- aqui começa o formulario que envia para o php via metodo post -->
<div class="login-container">
    <h2>Seja Bem Vindo!</h2>

     <!-- aqui a ação que manda o clinte para o validalogin  -->
    <form action="validalogin.php" method="post">       
        <div class="form-group">
            
            <div class="input-container">
                <i class="fas fa-user"></i>
                <input type="text" name="nome" placeholder="Digite seu nome" required> 
            </div>
        </div>
        <div class="form-group">
            
            <div class="input-container">
                <i class="fas fa-envelope"></i>
                <input type="email" name="email" placeholder="Digite seu E-mail" required> 
            </div>
        </div>
        <div class="form-group">
            
            <div class="input-container">
                <i class="fas fa-lock"></i>
                <input type="password" name="senha" placeholder="Digite sua Senha" required>
            </div>
        </div>

        <button type="submit">LOGIN</button>
    </form>
    
    <a href="#voltar" class="recuperar">Clique aqui para recuperar sua senha</a>
</div>

    <script>
       
    // Define a velocidade do vídeo para metade da velocidade normal
        const video = document.getElementById('bg-video');
        video.playbackRate = 0.7; 
      
    </script>
    
     

</body>
</html>
