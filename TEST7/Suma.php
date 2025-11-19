<html>
<head>
    <title>Prueba de JavaScript</title>
</head>
<body>
    <H1>Calculadora</H1>
    <form action="Suma.php" method="post">
    <p>
        <input type="number" id="num1" name="nombre" placeholder="numero 1"> +
        <input type="number" id="num2" name="nombre" placeholder="numero 2"> +
        <input type="number" id="num3" name="nombre" placeholder="numero 3">
        <button id="Calcular" >Calcular</button>
    </p>
    </form>
</body>
</html>
<style>
    H1 {
        color: blue;
        text-align: center;
    }
</style>
<script>
    let num1 = document.getElementById("num1");
    let num2 = document.getElementById("num2");
    let num3 = document.getElementById("num3");
    let boton = document.getElementById("Calcular");

    boton.addEventListener("click", function() {
        let suma = parseFloat(num1.value) + parseFloat(num2.value) + parseFloat(num3.value);
        alert("La suma es: " + suma);
        console.log("La suma es: " + suma);
    });
</script>