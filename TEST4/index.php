<hmtl>
<head>
    <title>Calcular el numero mayor</title>
</head>
<body>
    <h1>Calcular el numero mayor</h1>
    <form method="get" action="">
        <label for="numeros">Escribe la cadena de numeros</label><br>
        <input id="numeros" name="numeros" type="text">
        <input type="submit" value="Buscar">
    </form>
    <?php
    $numeros = isset($_GET['numeros']) ? trim($_GET['numeros']) : null;
    if($numeros == null && $numeros == ''){
        echo "<p>Introduzca la cadena de números</p>";
    }else{
        $array_numeros = explode(",", $numeros);
        $mayor = null;
        foreach($array_numeros as $num){
            $n = (int)trim($num);
            if($mayor === null || $n > $mayor){
                $mayor = $n;
            }
        }
        echo "El número mayor es " . $mayor . ".";    
    }
    ?>
</body>
</html>