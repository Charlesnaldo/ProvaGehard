<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página de Boas Vindas - E-commerce</title>
    <link rel="stylesheet" href="./css/validalogin.css">
    <link rel="icon" href="./img/pesquisa.png" type="image/x-icon">
</head>
<body>
    <div class="info-container">
        <?php 
            $nome = isset($_POST['nome']) ? htmlspecialchars($_POST['nome']) : 'usuário';
        ?>
        <h2>Seja bem-vindo, <span class="nome-destaque"><?php echo $nome; ?></span></h2>
        
        <h2>Escolha um produto:</h2>
        <div class="image-links">
            <div class="product-item">
                <a href="#" onclick="showForm('notebook-form')">
                    <img src="./img/Notebook.png" alt="Notebook" class="device-image">
                    <p>Notebook</p>
                    <p class="price">R$ 2.500,00</p>
                </a>
            </div>

            <div class="product-item">
                <a href="#" onclick="showForm('desktop-form')">
                    <img src="./img/desktop.png" alt="Desktop" class="device-image">
                    <p>Desktop</p>
                    <p class="price">R$ 1.800,00</p>
                </a>
            </div>
        </div>

        <!-- Formulário para Notebook -->
        <form id="notebook-form" action="processar.php" method="POST" class="specifications-form" style="display: none;">
            <h2>Escolha suas especificações para Notebook:</h2>
            <fieldset>
                <legend>Selecione a CPU:</legend>
                <label><input type="checkbox" name="cpu[]" value="cpu1"> Core i3 10G - R$ 500,00</label>
                <label><input type="checkbox" name="cpu[]" value="cpu2"> Core i5 10G - R$ 700,00</label>
                <label><input type="checkbox" name="cpu[]" value="cpu3"> Core i7 10G - R$ 900,00</label>
                <label><input type="checkbox" name="cpu[]" value="cpu4"> Core i9 10g - R$ 1.200,00</label>
            </fieldset>
            <fieldset>
                <legend>Selecione o SSD:</legend>
                <label><input type="checkbox" name="ssd[]" value="ssd1"> SSD 120 Gb - R$ 300,00</label>
                <label><input type="checkbox" name="ssd[]" value="ssd2"> SSD 240 Gb - R$ 500,00</label>
                <label><input type="checkbox" name="ssd[]" value="ssd3"> SSD 320 Gb - R$ 700,00</label>
                <label><input type="checkbox" name="ssd[]" value="ssd4"> SSD 480 Gb - R$ 900,00</label>
            </fieldset>
            <fieldset>
                <legend>Selecione a Memória:</legend>
                <label><input type="checkbox" name="memoria[]" value="memoria1"> Memória de 4GB DDR4 - R$ 200,00</label>
                <label><input type="checkbox" name="memoria[]" value="memoria2"> Memória de 8GB DDR4 - R$ 300,00</label>
                <label><input type="checkbox" name="memoria[]" value="memoria3"> Memória de 16GB DDR4 - R$ 400,00</label>
                <label><input type="checkbox" name="memoria[]" value="memoria4"> Memória de 32GB DDR4 - R$ 500,00</label>
            </fieldset>
            <fieldset>
                <legend>Selecione o Sistema Operacional:</legend>
                <label><input type="checkbox" name="sistema_operacional[]" value="windows" required> Windows 11 Home - R$ 150,00</label>
                <label><input type="checkbox" name="sistema_operacional[]" value="linux" required> Kali Linux - R$ 0,00</label>
            </fieldset>
            <button type="submit">Enviar</button>
        </form>

        <!-- Formulário para Desktop -->
        <form id="desktop-form" action="processar.php" method="POST" class="specifications-form" style="display: none;">
            <h2>Escolha suas especificações para Desktop:</h2>
            <fieldset>
                <legend>Selecione a CPU:</legend>
                <label><input type="checkbox" name="cpu[]" value="cpu1"> Core i3 10G - R$ 500,00</label>
                <label><input type="checkbox" name="cpu[]" value="cpu2"> Core i5 10G - R$ 700,00</label>
                <label><input type="checkbox" name="cpu[]" value="cpu3"> Core i7 10G - R$ 900,00</label>
                <label><input type="checkbox" name="cpu[]" value="cpu4"> Core i9 10g - R$ 1.200,00</label>
            </fieldset>
            <fieldset>
                <legend>Selecione o SSD:</legend>
                <label><input type="checkbox" name="ssd[]" value="ssd1"> SSD 120 Gb - R$ 300,00</label>
                <label><input type="checkbox" name="ssd[]" value="ssd2"> SSD 240 Gb - R$ 500,00</label>
                <label><input type="checkbox" name="ssd[]" value="ssd3"> SSD 320 Gb - R$ 700,00</label>
                <label><input type="checkbox" name="ssd[]" value="ssd4"> SSD 480 Gb - R$ 900,00</label>
            </fieldset>
            <fieldset>
                <legend>Selecione a Memória:</legend>
                <label><input type="checkbox" name="memoria[]" value="memoria1"> Memória de 4GB DDR4 - R$ 200,00</label>
                <label><input type="checkbox" name="memoria[]" value="memoria2"> Memória de 8GB DDR4 - R$ 300,00</label>
                <label><input type="checkbox" name="memoria[]" value="memoria3"> Memória de 16GB DDR4 - R$ 400,00</label>
                <label><input type="checkbox" name="memoria[]" value="memoria4"> Memória de 32GB DDR4 - R$ 500,00</label>
            </fieldset>
           
            <fieldset>
                <legend>Selecione o Tamanho do Monitor:</legend>
                <label><input type="checkbox" name="monitor[]" value="15" required> Monitor 15 - R$ 350,00</label>
                <label><input type="checkbox" name="monitor[]" value="18" required> Monitor de 18 - R$ 500,00</label>
                <label><input type="checkbox" name="monitor[]" value="21" required> Monitor de 21 - R$ 700,00</label>
                <label><input type="checkbox" name="monitor[]" value="24" required> Monitor de 24 - R$ 900,00</label>
            </fieldset>

            <fieldset>
                <legend>Selecione o Sistema Operacional:</legend>
                <label><input type="checkbox" name="sistema_operacional[]" value="windows" required> Windows 11 Home - R$ 150,00</label>
                <label><input type="checkbox" name="sistema_operacional[]" value="linux" required> Kali Linux - R$ 0,00</label>
            </fieldset>
            <button type="submit">Enviar</button>
        </form>

        <!-- Botão de voltar ao login -->
        <a href="index.php" class="back-button">Voltar ao Login</a>
    </div>

    <script>
        function showForm(formId) {
            document.getElementById('notebook-form').style.display = 'none';
            document.getElementById('desktop-form').style.display = 'none';
            document.getElementById(formId).style.display = 'block';
        }
    </script>
</body>
</html>
