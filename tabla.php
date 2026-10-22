<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabla de Multiplicar</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 30px; }
        table { border-collapse: collapse; width: 300px; margin-top: 20px; }
        th, td { border: 1px solid #333; padding: 8px; text-align: center; }
        th { background-color: #f2f2f2; }
    </style>
</head>
<body>

    <h2>Generador de Tabla de Multiplicar</h2>
    
    <!-- Formulario HTML para solicitar el número entero -->
    <form method="POST" action="">
        <label for="numero">Ingresa un número entero:</label>
        <input type="number" id="numero" name="numero" required>
        <button type="submit">Generar Tabla</button>
    </form>

    <?php
    // Verificar si se ha enviado el formulario mediante el método POST
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Obtener el número y asegurarse de que sea un entero
        $numero = intval($_POST["numero"]);
        
        echo "<h3>Tabla del $numero</h3>";
        
        // Inicio de la estructura de la tabla HTML
        echo "<table>";
        echo "<tr>
                <th>Operación</th>
                <th>Resultado</th>
              </tr>";
        
        // Ciclo for para generar los resultados del 1 al 10
        for ($i = 1; $i <= 10; $i++) {
            $resultado = $numero * $i;
            
            // Mostrar cada fila de la tabla HTML con los resultados
            echo "<tr>";
            echo "<td>$numero x $i</td>";
            echo "<td>$resultado</td>";
            echo "</tr>";
        }
        
        // Cierre de la tabla HTML
        echo "</table>";
    }
    ?>

</body>
</html>