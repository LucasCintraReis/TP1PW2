<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Resultado da média menção</title>
</head>
<body>

<h2>Resultado da média de menção</h2>

<?php
if (isset($_GET["nota1"]) && isset($_GET["nota2"]) && isset($_GET["nota3"])) {
    
    $n1 = floatval($_GET["nota1"]);
    $n2 = floatval($_GET["nota2"]);
    $n3 = floatval($_GET["nota3"]);
    
    $media = ($n1 + $n2 + $n3) / 3;
    $media_f = number_format($media, 2, ',', '.');
    
    echo "<p><strong>Nota 1:</strong> $n1</p>";
    echo "<p><strong>Nota 2:</strong> $n2</p>";
    echo "<p><strong>Nota 3:</strong> $n3</p>";
    echo "<h3>Média: $media_f</h3>";
    
    if ($media < 5) {
        echo "<p style='color:red'>I - Insuficiente</p>";
    } elseif ($media < 7) {
        echo "<p style='color:orange'>R - Regular</p>";
    } elseif ($media < 9) {
        echo "<p style='color:blue'>B - Bom</p>";
    } else {
        echo "<p style='color:green'>MB - Muito Bom</p>";
    }
    
} else {
    echo "<p style='color:red'>Dados não recebidos corretamente.</p>";
}
?>

<br>
<a href="index.php">Voltar a tela inicial</a>

</body>
</html>