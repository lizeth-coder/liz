<?php
function obtenerElemento($anio) {
    $valor = $anio - 4;
    $residuo = $valor % 10;
    if ($residuo < 0) $residuo += 10;

    if ($residuo == 0 || $residuo == 1) return "Madera";
    if ($residuo == 2 || $residuo == 3) return "Fuego";
    if ($residuo == 4 || $residuo == 5) return "Tierra";
    if ($residuo == 6 || $residuo == 7) return "Metal";
    return "Agua";
}

$elemento = isset($_POST["anio"]) ? obtenerElemento($_POST["anio"]) : "";
?>

<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<title>Ciclo Celestial</title>
</head>
<link rel="stylesheet" href="style.css">
<body>
<div class="card">
    <h2>Ciclo Celestial</h2>
    <p class="subtitle">Calcula el elemento correspondiente a un año</p>

    <form method="POST">
        <input type="number" name="anio" placeholder="Escribe un año..." required>
        <button type="submit">Calcular Elemento</button>
    </form>

    <?php if($elemento): ?>
        <div class="resultado">
            Elemento: <?= $elemento ?>
        </div>
    <?php endif; ?>
</div>

</body>
</html>