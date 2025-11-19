<html>
    <head>
    <title>Prueba de JavaScript</title>
    </head>
<body> 
    <label for="texto">Texto</label>
    <input type="text" id="texto">
    <label for="colorTexto">Color texto</label>
    <input type="color" id="colorTexto">
    <label for="colorFondo">Color Fondo</label>
    <input type="color" id="colorFondo">
    

    <div id="animacion">
    </div>

</body>
</html>
<style>
    #animacion {
        border: 2px solid black;
        margin-top: 10px;
        padding: 10px;
        color: #000000;
        background-color: #04f7ffff;
    }
</style>
<script>
    let cajaTexto = document.getElementById("texto");
    let divAnimacion = document.getElementById("animacion");
    let colorTexto = document.getElementById("colorTexto");
    let colorFondo = document.getElementById("colorFondo");

    colorTexto.addEventListener("change", () =>{
        divAnimacion.style.color = colorTexto.value;
    })
    cajaTexto.addEventListener("keydown", () =>{
        divAnimacion.innerHTML = cajaTexto.value;
    })
    colorFondo.addEventListener("input", () =>{
        divAnimacion.style.backgroundColor = colorFondo.value;
    })

</script>