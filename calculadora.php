<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Calculadora</title>
    <link rel="stylesheet" href="estilos.css">
</head>
<body>
<?php include 'menu.php'; ?>

<h1>Calculadora básica</h1>

<form method="POST">
    <label>Primer número:</label>
    <input type="number" step="any" name="n1" required value="<?php echo isset($_POST['n1']) ? htmlspecialchars($_POST['n1']) : ''; ?>">
    
    <label>Operación:</label>
    <select name="operacion" required>
        <option value="suma" <?php echo (isset($_POST['operacion']) && $_POST['operacion'] === 'suma') ? 'selected' : ''; ?>>Suma (+)</option>
        <option value="resta" <?php echo (isset($_POST['operacion']) && $_POST['operacion'] === 'resta') ? 'selected' : ''; ?>>Resta (-)</option>
        <option value="multiplicacion" <?php echo (isset($_POST['operacion']) && $_POST['operacion'] === 'multiplicacion') ? 'selected' : ''; ?>>Multiplicación (×)</option>
        <option value="division" <?php echo (isset($_POST['operacion']) && $_POST['operacion'] === 'division') ? 'selected' : ''; ?>>División (÷)</option>
    </select>

    <label>Segundo número:</label>
    <input type="number" step="any" name="n2" required value="<?php echo isset($_POST['n2']) ? htmlspecialchars($_POST['n2']) : ''; ?>">
    
    <button type="submit">Calcular</button>
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $a = filter_input(INPUT_POST, "n1", FILTER_VALIDATE_FLOAT);
    $b = filter_input(INPUT_POST, "n2", FILTER_VALIDATE_FLOAT);
    $operacion = filter_input(INPUT_POST, "operacion", FILTER_DEFAULT);

    if ($a === false || $a === null || $b === false || $b === null) {
        echo "<p class='error'>Ingresa dos números válidos.</p>";
    } else {
        echo "<div class='resultado'>";
        switch ($operacion) {
            case "suma":
                echo "<p>Suma: " . ($a + $b) . "</p>";
                break;
            case "resta":
                echo "<p>Resta: " . ($a - $b) . "</p>";
                break;
            case "multiplicacion":
                echo "<p>Multiplicación: " . ($a * $b) . "</p>";
                break;
            case "division":
                if ($b == 0) {
                    echo "<p class='error'>Error: No se puede dividir entre cero.</p>";
                } else {
                    echo "<p>División: " . ($a / $b) . "</p>";
                }
                break;
            default:
                echo "<p class='error'>Operación no válida.</p>";
                break;
        }
        echo "</div>";
    }
}
?>
</body>
</html>
