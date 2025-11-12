<?php
$enfermedad = [
    ["gripe", "Evitar el frío directo", 2],
    ["dolor de barriga", "Evitar lácteos y comida que produzca gases", 1],
    ["irritación de la piel", "Evitar cremas y químicos con pH alto que afecten la piel", 3],
    ["fiebre", "Descanso", 4]
];

$input = isset($_GET['enfermedad']) ? trim($_GET['enfermedad']) : null;
$result = null;
if ($input !== null && $input !== '') {
    $lowerInput = mb_strtolower($input);
    foreach ($enfermedad as $item) {
        $name = $item[0];
        if (mb_strtolower($name) === $lowerInput) {
            $result = [
                'nombre' => $name,
                'recomendacion' => $item[1],
                'dias' => (int)$item[2]
            ];
            break;
        }
    }
}
?>
<hmtl>
<head>
    <title>Buscador de enfermedades</title>
</head>
<body>
    <h1>Buscador de enfermedades</h1>
    <form method="get" action="">
        <label for="enfermedad">Escribe la enfermedad:</label><br>
        <input id="enfermedad" name="enfermedad" type="text">
        <input type="submit" value="Buscar">
    </form>
    <?php
    if ($input === null || $input === '') {
    } else {
        if ($result !== null) {
            echo "<h2>Resultado para: " .$result['nombre'] . "</h2>";
            echo "<p>Recomendación médica: " . $result['recomendacion']. "</p>";
            echo "<p>Días de reposo indicados: " . (int)$result['dias'] . " día(s)</p>";
        } else {
            echo "<p>No se encontró la enfermedad " . $input. "en la lista.</p>";
        }
    }
    ?>
</body>
</html>

