<html>
<head>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script>
        $(document).ready(function(){
            $("#mostra").hide();
            $("#oculta").click(function(){
               $("div").hide();
               $("#oculta").hide();
               $("#mostra").show();
               });
            $("#mostra").click(function(){
                $("div").show();
                $("#oculta").show();
                $("#mostra").hide();
            })

        });
    </script>

</head>

<body>

<h1>SALVE</h1>


<p>Feliz</p>



<div>
    <p>Estado vegeetativo</p>
</div>

<p>Triste</p>



<input type="submit" id="mostra" name="botao1" value="Mostrar">
<br><br>
<input type="submit" id="oculta" name="botao1" value="Ocultar">



</body>

</html>