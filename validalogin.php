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
    
    <div class="info-container">
        <?php 
            // Captura o nome do usuário da URL
            $nome = isset($_POST['nome']) ? htmlspecialchars($_POST['nome']) : 'usuário';
        ?>
        <h2>Seja bem-vindo, <span class="nome-destaque"><?php echo $nome; ?></span></h2>
        
        <h2>Você Deseja obter cotações de NOTEBOOK ou DESKTOP?</h2>
        <p>Clique na imagem para mais informações :</p>
        
        <div class="image-links">
    <a href="#" onclick="showForm('notebook-form')">
        <img src="./img/Notebook.png" alt="Notebook" class="device-image">
    </a>
    

<!-- Formulário para Notebook -->
<form id="notebook-form" action="processar.php" method="POST" class="specifications-form" style="display: none;">
    <h2>Escolha suas especificações para Notebook:</h2>
    <fieldset>
        <legend>Selecione a CPU:</legend>
        <label><input type="checkbox" name="cpu[]" value="cpu1"> CPU 1 - R$ 500,00</label>
        <label><input type="checkbox" name="cpu[]" value="cpu2"> CPU 2 - R$ 700,00</label>
        <label><input type="checkbox" name="cpu[]" value="cpu3"> CPU 3 - R$ 900,00</label>
        <label><input type="checkbox" name="cpu[]" value="cpu4"> CPU 4 - R$ 1.200,00</label>
    </fieldset>
    <fieldset>
        <legend>Selecione o SSD:</legend>
        <label><input type="checkbox" name="ssd[]" value="ssd1"> SSD 1 - R$ 300,00</label>
        <label><input type="checkbox" name="ssd[]" value="ssd2"> SSD 2 - R$ 500,00</label>
        <label><input type="checkbox" name="ssd[]" value="ssd3"> SSD 3 - R$ 700,00</label>
        <label><input type="checkbox" name="ssd[]" value="ssd4"> SSD 4 - R$ 900,00</label>
    </fieldset>
    <fieldset>
        <legend>Selecione a Memória:</legend>
        <label><input type="checkbox" name="memoria[]" value="memoria1"> Memória 1 - R$ 200,00</label>
        <label><input type="checkbox" name="memoria[]" value="memoria2"> Memória 2 - R$ 300,00</label>
        <label><input type="checkbox" name="memoria[]" value="memoria3"> Memória 3 - R$ 400,00</label>
        <label><input type="checkbox" name="memoria[]" value="memoria4"> Memória 4 - R$ 500,00</label>
    </fieldset>
    <fieldset>
        <legend>Selecione o Sistema Operacional:</legend>
        <label><input type="radio" name="sistema_operacional" value="windows" required> Windows - R$ 150,00</label>
        <label><input type="radio" name="sistema_operacional" value="linux" required> Linux - R$ 0,00</label>
    </fieldset>
    <button type="submit">Enviar</button>
</form>

<a href="#" onclick="showForm('desktop-form')">
        <img src="./img/desktop.png" alt="Desktop" class="device-image">
    </a>
</div>
<!-- Formulário para Desktop -->
<form id="desktop-form" action="processar.php" method="POST" class="specifications-form" style="display: none;">
    <h2>Escolha suas especificações para Desktop:</h2>
    <fieldset>
        <legend>Selecione a CPU:</legend>
        <label><input type="checkbox" name="cpu[]" value="cpu1"> CPU 1 - R$ 500,00</label>
        <label><input type="checkbox" name="cpu[]" value="cpu2"> CPU 2 - R$ 700,00</label>
        <label><input type="checkbox" name="cpu[]" value="cpu3"> CPU 3 - R$ 900,00</label>
        <label><input type="checkbox" name="cpu[]" value="cpu4"> CPU 4 - R$ 1.200,00</label>
    </fieldset>
    <fieldset>
        <legend>Selecione o SSD:</legend>
        <label><input type="checkbox" name="ssd[]" value="ssd1"> SSD 1 - R$ 300,00</label>
        <label><input type="checkbox" name="ssd[]" value="ssd2"> SSD 2 - R$ 500,00</label>
        <label><input type="checkbox" name="ssd[]" value="ssd3"> SSD 3 - R$ 700,00</label>
        <label><input type="checkbox" name="ssd[]" value="ssd4"> SSD 4 - R$ 900,00</label>
    </fieldset>
    <fieldset>
        <legend>Selecione a Memória:</legend>
        <label><input type="checkbox" name="memoria[]" value="memoria1"> Memória 1 - R$ 200,00</label>
        <label><input type="checkbox" name="memoria[]" value="memoria2"> Memória 2 - R$ 300,00</label>
        <label><input type="checkbox" name="memoria[]" value="memoria3"> Memória 3 - R$ 400,00</label>
        <label><input type="checkbox" name="memoria[]" value="memoria4"> Memória 4 - R$ 500,00</label>
    </fieldset>
    <fieldset>
        <legend>Selecione o Sistema Operacional:</legend>
        <label><input type="radio" name="sistema_operacional" value="windows" required> Windows - R$ 150,00</label>
        <label><input type="radio" name="sistema_operacional" value="linux" required> Linux - R$ 0,00</label>
    </fieldset>
    <button type="submit">Enviar</button>
</form>

<!-- Botão de voltar ao login -->
<a href="index.php" class="back-button">Voltar ao Login</a>


     

    <?php 
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $email_correto = "charles.naldo@gmail.com";
        $senha_correto = "123456";

        // Sanitiza e obtém as entradas
        $nome = htmlspecialchars(trim($_POST['nome'] ?? ''));
        $email = htmlspecialchars(trim($_POST['email'] ?? ''));
        $senha = htmlspecialchars(trim($_POST['senha'] ?? ''));

        // Faz a verificação se a senha é igual a e email também
        if ($email === $email_correto && $senha === $senha_correto) {
            // Redireciona para a página desejada
        } else {
            header("Location: pagina_acessonegado.php?nome=" . urlencode($nome));
        }
    }
    ?>



<script>
function showForm(formId) {
    // Oculta todos os formulários
    document.getElementById('notebook-form').style.display = 'none';
    document.getElementById('desktop-form').style.display = 'none';
    
    // Mostra o formulário selecionado
    document.getElementById(formId).style.display = 'block';
}
</script>

</body>
</html>
