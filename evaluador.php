<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Validador de Calificaciones</title>
</head>
<body>
    <h2>Evaluación de Calificaciones</h2>
    <form method="POST" action="">
        <label for="calificacion">Introduce la calificación (0-100):</label>
        <input type="text" id="calificacion" name="calificacion" required>
        <button type="submit">Evaluar</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $entrada = $_POST['calificacion'];
        if (!is_numeric($entrada)) {
            echo "<p style='color:red;'><strong>Error:</strong> Debes ingresar un valor numérico.</p>";
        } else {
            $nota = floatval($entrada);
            if ($nota < 0 || $nota > 100) {
                echo "<p style='color:red;'><strong>Error:</strong> La calificación debe estar estrictamente entre 0 y 100.</p>";
            } else {
                echo "<h3>Resultado:</h3>";
                if ($nota >= 90 && $nota <= 100) {
                    echo "<p>Calificación: <strong>$nota</strong> - <span style='color:green;'>Excelente</span></p>";
                } elseif ($nota >= 80 && $nota < 90) {
                    echo "<p>Calificación: <strong>$nota</strong> - <span style='color:blue;'>Muy bien</span></p>";
                } elseif ($nota >= 70 && $nota < 80) {
                    echo "<p>Calificación: <strong>$nota</strong> - <span style='color:orange;'>Satisfactorio</span></p>";
                } else {
                    echo "<p>Calificación: <strong>$nota</strong> - <span style='color:red;'>No acreditado</span></p>";
                }
            }
        }
    }
    ?>
</body>
</html>