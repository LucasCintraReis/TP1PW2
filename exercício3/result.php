<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Resultado da conversão</title>
</head>
<body>

<h2>Resultado da conversão</h2>

<?php
if (isset($_GET["valor"])) {
    
    $valor = floatval($_GET["valor"]);
    
    $cot_dolar = 5.5216;
    $cot_euro  = 6.3582;
    $cot_libra = 7.0261;
    
    if ($valor > 0) {
        $dolar = $valor / $cot_dolar;
        $euro  = $valor / $cot_euro;
        $libra = $valor / $cot_libra;
        
        $valor_f  = number_format($valor, 2, ',', '.');
        $dolar_f  = number_format($dolar, 2, ',', '.');
        $euro_f   = number_format($euro, 2, ',', '.');
        $libra_f  = number_format($libra, 2, ',', '.');
        
        echo "<p><strong>Valor em R$:</strong> $valor_f</p>";
        echo "<p><strong>Em Dólar (USD):</strong> $dolar_f</p>";
        echo "<p><strong>Em Euro (EUR):</strong> $euro_f</p>";
        echo "<p><strong>Em Libra Esterlina (GBP):</strong> $libra_f</p>";
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