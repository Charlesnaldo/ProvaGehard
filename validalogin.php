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
        
        session_start(); // Inicia a sessão para armazenar dados do usuário durante a navegação
        $nome = '';// Inicializa a variável $nome como uma string vazia
        

        // Verifica se o método de requisição é POST
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $email_correto = "ronaldo@gmail.com";
            $senha_correto = "123456";
        
            // Sanitiza e obtém as entradas

            // Obtém o valor do campo 'nome' enviado pelo formulário, 
            $nome = htmlspecialchars(trim($_POST['nome'] ?? ''));
            // A função trim() remove espaços em branco do início e do fim da string
            $email = htmlspecialchars(trim($_POST['email'] ?? ''));
            // htmlspecialchars(...): Esta função converte caracteres especiais em entidades HTML
            $senha = htmlspecialchars(trim($_POST['senha'] ?? ''));


            // O símbolo ?? em PHP é o operador de coalescência nula. Ele é usado para retornar o primeiro operando que não é nulo. Basicamente, ele verifica se a variável à esquerda está definida e não é nula. Se estiver, ele retorna esse valor; caso contrário, retorna o valor à direita.
        
            // Valida as credenciais
            if ($email === $email_correto && $senha === $senha_correto) {
                $_SESSION['nome'] = $nome; // Armazena o nome do usuário na sessão
                
                // Aqui você pode redirecionar para outra página, se necessário
            } else {
                // Redireciona para a página de acesso negado
                header("Location: pagina_acessonegado.php");
                exit(); // Garante que o código a seguir não seja executado
            }
            
        }
        ?>
         
         <!-- ao logar atender a credeciais ele vai ter opçoes de escolhar   -->

        <h2>Seja bem-vindo, <span class="nome-destaque"><?php echo $nome; ?></span></h2>
        
        <!-- Aqui a opção do notebook -->
        <h2>Escolha um produto:</h2>
        <div class="image-links">
            <div class="product-item">
                <a href="#" onclick="showForm('notebook-form')">
                    <img src="./img/Notebook.png" alt="Notebook" class="device-image">
                    <p>Notebook</p>
                    <p class="price">a partir de R$ 2.500,00</p>
                </a>
            </div>
        <!-- Aqui a opção do desktop -->
            <div class="product-item">
                <a href="#" onclick="showForm('desktop-form')">
                    <img src="./img/desktop.png" alt="Desktop" class="device-image">
                    <p>Desktop</p>
                    <p class="price"> a partir de R$ 1.800,00</p>
                </a>
            </div>
        </div>

        <!-- Formulário para Notebook -->
        <form id="notebook-form" action="retornonotebook.php" method="POST" class="specifications-form" style="display: none;">
            <h2>Escolha suas especificações para Notebook:</h2>
            <fieldset>
                <legend>Selecione a CPU:</legend>
                <label><input type="radio" name="cpu_desktop" value="Core i3 10G" required> Core i3 10G - R$ 500,00</label>
                <label><input type="radio" name="cpu_desktop" value="Core i5 10G"> Core i5 10G - R$ 700,00</label>
                <label><input type="radio" name="cpu_desktop" value="Core i7 10G"> Core i7 10G - R$ 900,00</label>
                <label><input type="radio" name="cpu_desktop" value="Core i9 10G"> Core i9 10G - R$ 1.200,00</label>
            </fieldset>
            <fieldset>
                <legend>Selecione o SSD:</legend>
                <label><input type="radio" name="ssd_desktop" value="SSD 120 Gb" required> SSD 120 Gb - R$ 300,00</label>
                <label><input type="radio" name="ssd_desktop" value="SSD 240 Gb"> SSD 240 Gb - R$ 500,00</label>
                <label><input type="radio" name="ssd_desktop" value="SSD 320 Gb"> SSD 320 Gb - R$ 700,00</label>
                <label><input type="radio" name="ssd_desktop" value="SSD 480 Gb"> SSD 480 Gb - R$ 900,00</label>
            </fieldset>
            <fieldset>
                <legend>Selecione a Memória:</legend>
                <label><input type="radio" name="memoria_desktop" value="Memória de 4GB DDR4" required> Memória de 4GB DDR4 - R$ 200,00</label>
                <label><input type="radio" name="memoria_desktop" value="Memória de 8GB DDR4 "> Memória de 8GB DDR4 - R$ 300,00</label>
                <label><input type="radio" name="memoria_desktop" value="Memória de 16GB DDR4"> Memória de 16GB DDR4 - R$ 400,00</label>
                <label><input type="radio" name="memoria_desktop" value="Memória de 32GB DDR4"> Memória de 32GB DDR4 - R$ 500,00</label>
            </fieldset>
            <fieldset>
                <legend>Selecione o Sistema Operacional:</legend>
                <label><input type="radio" name="sistema_operacional_desktop" value="Windows 11 Home " required> Windows 11 Home - R$ 150,00</label>
                <label><input type="radio" name="sistema_operacional_desktop" value="Kali Linux"> Kali Linux - R$ 0,00</label>
            </fieldset>
            <button type="submit">Enviar</button>
        </form>

        <!-- Formulário para Desktop -->

         <!-- note que ao escolher e enviar os dados sera direcionado para pagina retornodesktop.php -->
        <form id="desktop-form" action="retornodesktop.php" method="POST" class="specifications-form" style="display: none;">
            <h2>Escolha suas especificações para Desktop:</h2>
            <fieldset>
                <legend>Selecione a CPU:</legend>
                <label><input type="radio" name="cpu_desktop" value="Core i3 10G" required> Core i3 10G - R$ 500,00</label>
                <label><input type="radio" name="cpu_desktop" value="Core i5 10G"> Core i5 10G - R$ 700,00</label>
                <label><input type="radio" name="cpu_desktop" value="Core i7 10G"> Core i7 10G - R$ 900,00</label>
                <label><input type="radio" name="cpu_desktop" value="Core i9 10G"> Core i9 10G - R$ 1.200,00</label>
            </fieldset>
            <fieldset>
                <legend>Selecione o SSD:</legend>
                <label><input type="radio" name="ssd_desktop" value="SSD 120 Gb" required> SSD 120 Gb - R$ 300,00</label>
                <label><input type="radio" name="ssd_desktop" value="SSD 240 Gb"> SSD 240 Gb - R$ 500,00</label>
                <label><input type="radio" name="ssd_desktop" value="SSD 320 Gb"> SSD 320 Gb - R$ 700,00</label>
                <label><input type="radio" name="ssd_desktop" value="SSD 480 Gb"> SSD 480 Gb - R$ 900,00</label>
            </fieldset>
            <fieldset>
                <legend>Selecione a Memória:</legend>
                <label><input type="radio" name="memoria_desktop" value="Memória de 4GB DDR4" required> Memória de 4GB DDR4 - R$ 200,00</label>
                <label><input type="radio" name="memoria_desktop" value="Memória de 8GB DDR4 "> Memória de 8GB DDR4 - R$ 300,00</label>
                <label><input type="radio" name="memoria_desktop" value="Memória de 16GB DDR4"> Memória de 16GB DDR4 - R$ 400,00</label>
                <label><input type="radio" name="memoria_desktop" value="Memória de 32GB DDR4"> Memória de 32GB DDR4 - R$ 500,00</label>
            </fieldset>

            <fieldset>
                <legend>Selecione o Tamanho do Monitor:</legend>
                <label><input type="radio" name="monitor" value="Monitor de 15" required> Monitor 15 - R$ 350,00</label>
                <label><input type="radio" name="monitor" value="Monitor de 18"> Monitor de 18 - R$ 500,00</label>
                <label><input type="radio" name="monitor" value="Monitor de 21"> Monitor de 21 - R$ 700,00</label>
                <label><input type="radio" name="monitor" value="Monitor de 24"> Monitor de 24 - R$ 900,00</label>
            </fieldset>

            <fieldset>
                <legend>Selecione o Sistema Operacional:</legend>
                <label><input type="radio" name="sistema_operacional_desktop" value="Windows 11 Home " required> Windows 11 Home - R$ 150,00</label>
                <label><input type="radio" name="sistema_operacional_desktop" value="Kali Linux"> Kali Linux - R$ 0,00</label>
            </fieldset>
            <button type="submit">Enviar</button>
        </form>

        <!-- Botão de voltar ao login -->
        <a href="index.php" class="back-button">Voltar ao Login</a>
    </div>

?>
    <script>
        function showForm(formId) {
    // Esconde o formulário "notebook-form"
    document.getElementById('notebook-form').style.display = 'none';

    // Esconde o formulário "desktop-form"
    document.getElementById('desktop-form').style.display = 'none';

    // Exibe o formulário passado como argumento (formId)
    document.getElementById(formId).style.display = 'block';
}
    </script>
</body>
</html>
