<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Resultado do IMC</title>
</head>
<body>

<h2>Resultado</h2>

<?php

if (isset($_GET["nome"]) && isset($_GET["peso"]) && isset($_GET["altura"])) {
    
    $nome   = $_GET["nome"];
    $peso   = floatval($_GET["peso"]);
    $altura = floatval($_GET["altura"]);
    
    if ($altura > 0) {
        $imc = $peso / ($altura * $altura);
        $imc_formatado = number_format($imc, 2, ',', '.');
        
        echo "<p><strong>Nome:</strong> $nome</p>";
        echo "<p><strong>Peso:</strong> $peso kg</p>";
        echo "<p><strong>Altura:</strong> $altura m</p>";
        echo "<h3>Seu IMC é: $imc_formatado</h3>";
        
        if ($imc < 18.5) {
            echo "<p style='color:orange'>Abaixo do peso</p>";
        } elseif ($imc < 25) {
            echo "<p style='color:green'>Peso normal</p>";
        } elseif ($imc < 30) {
            echo "<p style='color:orange'>Sobrepeso</p>";
        } else {
            echo "<p style='color:red'>Obesidade</p>";
        }
    } else {
        echo "<p style='color:red'>Altura inválida!</p>";
    }
    
} else {
    echo "<p style='color:red'>Dados não recebidos corretamente.</p>";
}

?>

<br>
<a href="index.php">← Voltar e calcular outro IMC</a>

</body>
</html>