<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Resultado do email</title>
</head>
<body>

<h2>Resultado</h2>

<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = trim($_POST["nome"]);
    $sobrenome = trim($_POST["sobrenome"]);
    
    $nome_limpo = strtolower(iconv('UTF-8', 'ASCII//TRANSLIT', $nome));
    $sobrenome_limpo = strtolower(iconv('UTF-8', 'ASCII//TRANSLIT', $sobrenome));
    
    $email = $nome_limpo . $sobrenome_limpo . "@cps.sp.gov.br";
    
    $email = str_replace(" ", "", $email);
    
    echo "<br><br>";
    echo "<h3>E-mail gerado:</h3>";
    echo "<p style='font-size:1.4em; color:blue;'><strong>$email</strong></p>";
}
?>

<a href="index.php">← Voltar a Tela inicial</a>

</body>
</html>