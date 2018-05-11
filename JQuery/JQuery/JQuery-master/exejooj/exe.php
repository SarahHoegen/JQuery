<html>
<head>

    <link rel="stylesheet" type="text/css" href="style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script>
        $(document).ready(function(){

            $("#mostrar").hide();

            $("#ocultar").click(function(){
               $("#principal").hide("slow");
               $("#ocultar").hide();
               $("#mostrar").show();
               });

            $("#mostrar").click(function(){
                $("#principal").show("slow");
                $("#ocultar").show();
                $("#mostrar").hide();
            });

            $("#alternar").click(function(){
                $("#principal").toggle();
            });

            $("#ocultarFade").click(function() {
                $("#principal").fadeOut("slow");
            });

            $("#mostrarFade").click(function() {
                $("#principal").fadeIn("slow");
            });

            $("#alternarFade").click(function() {
                    $("#principal").fadeToggle("slow");
            });

            $("#ocultarSlide").click(function() {
                $("#principal").slideUp(2000);
            });

            $("#mostrarSlide").click(function() {
                $("#principal").slideDown(2000);
            });

            $("#alternarSlide").click(function() {
                $("#principal").slideToggle("slow");
            });
            //accordion
            $(".accordion h2").click(function(){
                $(this).parent().find("p").slideToggle("slow");

            });
            $("div h2").dblclick(function(){
                $(this).toggleClass('branca');
            });

            $("div h2").hover(function(){
                $(this).addClass('azul')
            }, function(){
                $(this).removeClass('azul');
            });




        });

    </script>

</head>

<body>

<h1>Poesias</h1>
<h4>Tristes e Felizes</h4>


<input type="submit" id="mostrar" name="botao1" value="Mostrar">
<input type="submit" id="ocultar" name="botao2" value="Ocultar">
<input type="submit" id="alternar" name="botao3" value="Alternar">
<br><br>
<input type="submit" id="mostrarFade" name="FadeIn" value="Mostrar Fade">
<input type="submit" id="ocultarFade" name="FadeOut" value="Ocultar Fade">
<input type="submit" id="alternarFade" name="FadeToggle" value="Alternar Fade">
<br><br>
<input type="submit" id="mostrarSlide" name="SlideIn" value="Mostrar Slide">
<input type="submit" id="ocultarSlide" name="SlideOut" value="Ocultar Slide">
<input type="submit" id="alternarSlide" name="SlideToggle" value="Alternar Slide">






<p>        Meu amigo, vamos sofrer,
    vamos beber, vamos ler jornal,
    vamos dizer que a vida é ruim,
    meu amigo, vamos sofrer.
    Vamos fazer um poema
    ou qualquer outra besteira.
    Fitar por exemplo uma estrela
    por muito tempo, muito tempo
    e dar um suspiro fundo
    ou qualquer outra besteira.
    Vamos beber uísque, vamos
    beber cerveja preta e barata,
    beber, gritar e morrer,
    ou, quem sabe? beber apenas.
    Vamos xingar a mulher,
    que está envenenando a vida
    com seus olhos e suas mãos
    e o corpo que tem dois seios
    e tem um embigo também.
    Meu amigo, vamos xingar
    o corpo e tudo que é dele
    e que nunca será alma.
    Meu amigo, vamos cantar,
    vamos chorar de mansinho
    e ouvir muita vitrola,
    depois embriagados vamos
    beber mais outros sequestros
    (o olhar obsceno e a mão idiota)
    depois vomitar e cair
    e dormir.

</p>

<div id="principal" class="accordion">
    <h2>Vampiro Doidão: Parte 1</h2>
    <p>    Puta que pariu, meu gato pôs um ovo
        Mas gato não põe ovo, puta que pariu de novo
        Eu sou o vampiro doidão,eu sou o vampiro doidão
        Passo o dia dormindo e a noite eu fumo um baseadão
        Se droga fosse álcool eu morria de cirrose
        Se álcool fosse droga eu morria de overdose
        Sou vampiro doidão, sou o vampiro doidão
        Eu to muito louco, etá baseado do bão!
        Estava no escurinho, comendo a empregada
        Alguém abriu a porta e eu comi a bunda errada
        Eu sou o vampiro doidão, eu sou o vampiro doidão
        Só faço sexo dentro do caixão


 </p>
</div>

<div id="principal2" class="accordion">
    <h2>Vampiro Doidão: Parte 2</h2>
    <p> Gosto das moças virgem e das moças honradas
        Mas o que eu gosto mesmo é de festar com a putaiada
        Sou vampiro doidão, eu sou vampiro doidão
        Só chupo sangue de menstruação
        Quando eu nasci, no bico da cegonha
        Na minha mamadeira foi dois quilos de maconha
        Sou vampiro doidão, eu sou vampiro doidão
        Eu fumo todas, e não abro mão
        Não sei como é que eu posso, não sei como é que eu pude
        Comer caco de vidro e cagar bola de gude
        Sou vampiro doidão, eu sou vampiro doidão
        Eu quero morrer todo peladão
    </p>
</div>

<div id="principal3" class="accordion">
    <h2>Vampiro Doidão: Parte 3</h2>
    <p> Marcelo é meu amigo, Marcelo é meu colega
        Eu vou fazer com ele o que o cavalo fez com a égua
        Sou vampiro doidão, eu sou vampiro doidão
        Passo o dia dormindo e a noite eu fumo um baseadão
        Eu vi papai noel, montado num urubu
        Tomando coca-cola e arrotando pelo cu
        Sou vampiro doidão, eu sou vampiro doidão
        Eu to muito louco, eita baseado do bão
        Humberto era careta, um cara retardado
        Fumou bosta de vaca e ficou muito pirado
        Sou vampiro doidão, eu sou vampiro doidão
        Só faço sexo dentro do caixão
        Eu fui ao cemitério e sentei na catacumba
        A puta da caveira beliscou a minha bunda
        Sou vampiro doidão, eu sou vampiro doidão
        Só chupo sangue de menstruação
        Pulei de paraquedas, o paraquedas não abriu
        Mandei o fabricante para puta que pariu
        Eu sou vampiro doidão, eu sou vampiro doidão
        Eu fumo todas e não abro mão
        Quando eu morrer não joguem flores no caixão
        Podem jogar maconha que é pra eu subir doidão
        Sou vampiro doidão, eu sou vampiro doidão
        Eu quero morrer todo peladão
        Larica não tem hora, também não tem lugar
        Larica tá me dando mais vontade de fumar
        Sou vampiro doidão, eu sou vampiro doidão
    </p>
</div>

<p>   Meu amigo, vamos sofrer,
    vamos beber, vamos ler jornal,
    vamos dizer que a vida é ruim,
    meu amigo, vamos sofrer.
    Vamos fazer um poema
    ou qualquer outra besteira.
    Fitar por exemplo uma estrela
    por muito tempo, muito tempo
    e dar um suspiro fundo
    ou qualquer outra besteira.
    Vamos beber uísque, vamos
    beber cerveja preta e barata,
    beber, gritar e morrer,
    ou, quem sabe? beber apenas.
    Vamos xingar a mulher,
    que está envenenando a vida
    com seus olhos e suas mãos
    e o corpo que tem dois seios
    e tem um embigo também.
    Meu amigo, vamos xingar
    o corpo e tudo que é dele
    e que nunca será alma.
    Meu amigo, vamos cantar,
    vamos chorar de mansinho
    e ouvir muita vitrola,
    depois embriagados vamos
    beber mais outros sequestros
    (o olhar obsceno e a mão idiota)
    depois vomitar e cair
    e dormir. </p>




</body>

</html>