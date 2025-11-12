<hmtl>
<head>
    <title>Calculador de factorial</title>
</head>
<body>
    <h1>Calculador de factorial</h1>
    <form method="get" action="">
        <label for="factorial">Escribe el numero a calcular</label><br>
        <input id="factorial" name="factorial" type="text">
        <input type="submit" value="Buscar">
    </form>
    <?php
    $factorial = isset($_GET['factorial']) ? trim($_GET['factorial']) : null;
    if($factorial == null && $factorial == ''){
        echo "<p>Introduzca un número</p>";
    }else{
        $n = (int)$factorial;
        $resultado = 1;
        if($n < 0){
            echo "<p>El factorial no está definido para números negativos.</p>";
        }else{
            if($n == 0){
                $resultado = 1;
            }else{
                $i = 1;
                do{
                    $resultado *= $i;
                    $i++;
                }while($i <= $n);
            }
            echo "El factorial de " . $n . " es " . $resultado . ".";
        }
    }
    ?>
</body>
</html>