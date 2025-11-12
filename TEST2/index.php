<hmtl>
<head>
    <title>Contador de letras</title>
</head>
<body>
    <h1>Contador de letras a</h1>
    <form method="get" action="">
        <label for="enfermedad">Escribe la palabra</label><br>
        <input id="enfermedad" name="enfermedad" type="text">
        <input type="submit" value="Buscar">
    </form>
    <?php
    $enfermedad = isset($_GET['enfermedad']) ? trim($_GET['enfermedad']) : null;
    if($enfermedad == null && $enfermedad == ''){
        echo "<p>Introduzca una palabra</p>";
    }else{
        $veces_repetido = substr_count(mb_strtolower($enfermedad), "a");
    echo "La letra 'a' se repite " . $veces_repetido . " veces.";    
    }
    ?>
</body>
</html>