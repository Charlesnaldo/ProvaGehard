<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resumo do Pedido</title>
    <link rel="stylesheet" href="./css/retorno.css">
    <link rel="icon" href="./img/pesquisa.png" type="image/x-icon">
</head>
<body>

<div class="container">
    <?php
    session_start();
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Função para sanitizar a entrada e evitar XSS
        function sanitizeInput($data) {
            return htmlspecialchars(trim($data));
        }

        // Coletar e sanitizar as entradas
        $cpu = sanitizeInput($_POST["cpu_desktop"] ?? "N/A");
        $ssd = sanitizeInput($_POST["ssd_desktop"] ?? "N/A");
        $memoria = sanitizeInput($_POST["memoria_desktop"] ?? "N/A");
        $monitor = sanitizeInput($_POST["monitor"] ?? "N/A");
        $sistemaOperacional = sanitizeInput($_POST["sistema_operacional_desktop"] ?? "N/A");

        // Verifica se o nome está armazenado na sessão
        $nome = isset($_SESSION['nome']) ? $_SESSION['nome'] : "Usuário"; // Valor padrão se o nome não estiver na sessão

        // Exibir as escolhas
        echo "<h2>Resumo das suas escolhas:</h2>";
        echo "<h3>Desktop</h3>";
        echo "<ul>";
        echo "<li><strong>Processador escolhido:</strong> $cpu</li>";
        echo "<li><strong>SSD escolhido:</strong> $ssd</li>";
        echo "<li><strong>Memória escolhida:</strong> $memoria</li>";
        echo "<li><strong>Monitor escolhido:</strong> $monitor</li>";
        echo "<li><strong>Sistema Operacional escolhido:</strong> $sistemaOperacional</li>";
        echo "</ul>";

        // Valores dos componentes
        $valores = [
            'cpu' => ['Core i3 10G' => 500, 'Core i5 10G' => 700, 'Core i7 10G' => 900, 'Core i9 10G' => 1200],
            'ssd' => ['SSD 120 Gb' => 300, 'SSD 240 Gb' => 500, 'SSD 320 Gb' => 700, 'SSD 480 Gb' => 900],
            'memoria' => ['Memória de 4GB DDR4' => 200, 'Memória de 8GB DDR4' => 300, 'Memória de 16GB DDR4' => 400, 'Memória de 32GB DDR4' => 500],
            'monitor' => ['Monitor de 15' => 350, 'Monitor de 18' => 500, 'Monitor de 21' => 700, 'Monitor de 24' => 900],
            'sistema' => ['Windows 11 Home' => 150, 'Linux' => 0]
        ];

        // Calcular o total
        $total = 0;
        $total += $valores['cpu'][$cpu] ?? 0;
        $total += $valores['ssd'][$ssd] ?? 0;
        $total += $valores['memoria'][$memoria] ?? 0;
        $total += $valores['monitor'][$monitor] ?? 0;
        $total += $valores['sistema'][$sistemaOperacional] ?? 0;

        // Exibir o total
        echo "<h3>O total do seu pedido Sr(a) $nome, é de: R$ " . number_format($total, 2, ',', '.') . "</h3>";
        echo '<a href="validalogin.php" class="back-button">Voltar para a Página de Produtos</a>';
    }
    ?>
</div>

</body>
</html>
