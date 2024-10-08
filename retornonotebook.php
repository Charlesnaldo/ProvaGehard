<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resumo do Pedido</title>
    <link rel="icon" href="./img/pesquisa.png" type="image/x-icon">
    <link rel="stylesheet" href="./css/retorno.css">
</head>
<body>

<div class="container">
    <?php
     session_start(); //Inicia uma nova sessão ou retoma uma sessão existente. Isso permite que você armazene e recupere informações do usuário durante a navegação no site

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Função para sanitizar a entrada e evitar XSS
        function sanitizeInput($data) {
            return htmlspecialchars(trim($data));
        }

        // Coletar e sanitizar as entradas
        $cpu = sanitizeInput($_POST["cpu_desktop"] ?? "N/A");
        $ssd = sanitizeInput($_POST["ssd_desktop"] ?? "N/A");
        $memoria = sanitizeInput($_POST["memoria_desktop"] ?? "N/A");
        $sistemaOperacional = sanitizeInput($_POST["sistema_operacional_desktop"] ?? "N/A");

        // Verifica se o nome está armazenado na sessão
        $nome = isset($_SESSION['nome']) ? $_SESSION['nome'] : "Usuário"; // Valor padrão se o nome não estiver na sessão

        // Exibir as escolhas
        echo "<h2>Resumo das suas escolhas:</h2>";
        echo "<h3>Notebook</h3>";
        echo "<ul>";
        echo "<li><strong>Processador escolhido:</strong> $cpu</li>";
        echo "<li><strong>SSD escolhido:</strong> $ssd</li>";
        echo "<li><strong>Memória escolhida:</strong> $memoria</li>";
        echo "<li><strong>Sistema Operacional escolhido:</strong> $sistemaOperacional</li>";
        echo "</ul>";

        // Definição dos valores
        $valores = [
            'cpu' => [
                'Core i3 10G' => 500,
                'Core i5 10G' => 700,
                'Core i7 10G' => 900,
                'Core i9 10G' => 1200
            ],
            'ssd' => [
                'SSD 120 Gb' => 300,
                'SSD 240 Gb' => 500,
                'SSD 320 Gb' => 700,
                'SSD 480 Gb' => 900
            ],
            'memoria' => [
                'Memória de 4GB DDR4' => 200,
                'Memória de 8GB DDR4' => 300,
                'Memória de 16GB DDR4' => 400,
                'Memória de 32GB DDR4' => 500
            ],
            'sistema' => [
                'Windows 11 Home' => 150,
                'Kali Linux' => 0
            ]
        ];

        // Calcular o total
        $total = 0; // Inicializa a variável total com zero
        $total += $valores['cpu'][$cpu] ?? 0; // Adiciona o preço do processador escolhido ao total
        $total += $valores['ssd'][$ssd] ?? 0; // Adiciona o preço do SSD escolhido ao total
        $total += $valores['memoria'][$memoria] ?? 0; // Adiciona o preço da memória escolhida ao total
        $total += $valores['sistema'][$sistemaOperacional] ?? 0; // Adiciona o preço do sistema operacional escolhido ao total

        // Exibir o total
        echo "<h3>O total do seu pedido Sr(a) $nome é de: R$ " . number_format($total, 2, ',', '.') . "</h3>";
        echo '<a href="validalogin.php" class="back-button">Voltar para a Página de Produtos</a>';
    }
    ?>
</div>

</body>
</html>
