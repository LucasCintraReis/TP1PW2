<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Resultado do Salário Líquido</title>
</head>
<body>

<h2>Resultado do Salário Líquido</h2>

<?php
if (isset($_GET["bruto"])) {
    
    $bruto = floatval($_GET["bruto"]);
    $salario_minimo = 1621.00;
    $dois_min = 2 * $salario_minimo;
    
    if ($bruto > 0) {
        if ($bruto <= $dois_min) {
            $inss = $bruto * 0.08;
            $tipo = "8% (até 2 salários mínimos)";
        } else {
            $inss = $bruto * 0.10;
            $tipo = "10% (acima de 2 salários mínimos)";
        }
        
        $liquido = $bruto - $inss;
        
        $bruto_f   = number_format($bruto, 2, ',', '.');
        $inss_f    = number_format($inss, 2, ',', '.');
        $liquido_f = number_format($liquido, 2, ',', '.');
        
        echo "<p><strong>Salário Bruto:</strong> R$ $bruto_f</p>";
        echo "<p><strong>Desconto INSS:</strong> R$ $inss_f ($tipo)</p>";
        echo "<h3>Salário Líquido: R$ $liquido_f</h3>";
    } else {
        echo "<p style='color:red'>Valor inválido!</p>";
    }
    
} else {
    echo "<p style='color:red'>Dados não recebidos corretamente.</p>";
}
?>

<br>
<a href="index.php">Voltar a tela inicial</a>

</body>
</html>