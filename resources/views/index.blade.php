<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Casa de comida saludable</title>

    <link href="{{ URL::asset('css/bootstrap.min.css') }}" rel="stylesheet">
    {{--<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"--}}
    <link href="https://fonts.googleapis.com/css?family=Kalam|Kanit:800" rel="stylesheet">
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="{{ URL::asset('css/styles.css') }}" rel="stylesheet">
</head>
<body>


<div class="grow text-center" id="navMenu">
    <a href="#restaurante" style="background-image: url('/img/background/food.jpg')">
        <div>
            <h1>Restaurante</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur autem cum dignissimos doloremque ea eaque facilis fuga illum, labore natus omnis quo, ratione veritatis! Fugit.</p>
        </div>
    </a>
    <a href="#productos" style="background-image: url('/img/background/grain.jpg')">
        <div>
            <h1>Productos</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur autem cum dignissimos doloremque ea eaque facilis fuga illum, labore natus omnis quo, ratione veritatis! Fugit.</p>
        </div>
    </a>
    <a href="#about" style="background-color:#0ca7a9;">
        <div>
            <img src="/img/logo.png" alt="" class="logo">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur autem cum dignissimos doloremque ea eaque facilis fuga illum, labore natus omnis quo, ratione veritatis! Fugit.</p>
        </div>
    </a>
    <a href="#pedidos" style="background-image: url('/img/background/delivery.jpg')">
        <div>
            <h1>Pedidos</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur autem cum dignissimos doloremque ea eaque facilis fuga illum, labore natus omnis quo, ratione veritatis! Fugit.</p>
        </div>
    </a>
    <a href="#consultas" style="background-image: url('/img/background/question.jpg')">
        <div>
            <h1>Contacto</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur autem cum dignissimos doloremque ea eaque facilis fuga illum, labore natus omnis quo, ratione veritatis! Fugit.</p>
        </div>
    </a>
</div>


{{------------------About------------------}}
<div id="about">
    <div class="container-fluid text-center">
        <div class="text mb-5 container">
            <h1 class="phrase mb-3">"No empieces una dieta que terminara algun dia, empieza un estilo de vida que dure para siempre."</h1>
            <h4>Comida rica y saludable que elaboramos en nuestra casa, comprometiendonos en proporcionar calidad a nuestros clientes.</h4>
            <h4>Almacen natural y organico, con productos de La esquina de las Flores.</h4>
        </div>
        <div class="map">
            <a href="https://www.google.com/maps/place/Casa+de+Comida+Saludable,+productos+de+la+Esquina+de+las+Flores/@-34.7625714,-58.3986422,17.75z/data=!4m13!1m7!3m6!1s0x95bcd2eb256d7803:0x60c25f66089a3f91!2sJos%C3%A9+Ignacio+Gorriti+10,+Lomas+de+Zamora,+Buenos+Aires!3b1!8m2!3d-34.7624258!4d-58.3978954!3m4!1s0x0:0xe8006829fe6d08ae!8m2!3d-34.7623112!4d-58.3978218" target="_blank"><img src="img/map.png" alt="" class="shadow-lg border map"></a>
            <p>Encontranos en Gorriti 10, Lomas de Zamora.</p>
            <button class="loginBtn loginBtn--facebook">
                Casa de Comida Saludable
            </button>
            <button class="loginBtn loginBtn--google">
                @casadecomidasaludable
            </button>
        </div>
    </div>
</div>


{{------------------Restaurante------------------}}

<div id="restaurante">
    <div class="container-fluid text-center mt-5">
        <h1>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores, consequatur dolorum eveniet facere quod temporibus?</h1>


    </div>
</div>


{{------------------Productos------------------}}
<div id="productos">
    <div class="container-fluid text-center mt-5">
        <h1>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores, consequatur dolorum eveniet facere quod temporibus?</h1>


    </div>
</div>


{{------------------Pedidos------------------}}
<div id="pedidos">
    <div class="container-fluid text-center mt-5">
        <h1>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores, consequatur dolorum eveniet facere quod temporibus?</h1>


    </div>
</div>


{{------------------Consultas------------------}}
<div id="consultas">
    <div class="container-fluid text-center mt-5">
        <h1>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores, consequatur dolorum eveniet facere quod temporibus?</h1>


    </div>
</div>






<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

<script src="{{ URL::asset('js/pages.js') }}"></script>

</body>

</html>