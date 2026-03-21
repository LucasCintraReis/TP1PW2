<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Cálculo de IMC</title>
</head>
<body>

<h2>Cálculo de IMC</h2>

<form method="get" action="result.php">
    <label>Nome completo:</label><br>
    <input type="text" name="nome" required><br><br>
    
    <label>Peso (kg):</label><br>
    <input type="number" name="peso" step="0.1" required><br><br>
    
    <label>Altura (m):</label><br>
    <input type="number" name="altura" step="0.01" required placeholder="ex: 1.75"><br><br>
    
    <button type="submit">Calcular IMC</button>
</form>

</body>
</html>