<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <title>Inicio</title>
</head>
<body>
    @include('menu') <!-- INCLUDE menu.blade.php -->
    <div id="container">
        <div id="content">
            <!--BANNER PRINCIPAL-->
            <div id="main-banner" class="center">
                <div id="main-banner--buy" class="center-flex background" style="background-image: url('{{ asset('images/banner-buy.jpeg')}}');"> <!--TO BUY-->
                    <span class="bold">COMPRAR</span>
                </div>
                <div id="main-banner--design" class="center-flex background" style="background-image: url('{{ asset('images/banner-design2.jpg')}}');"> <!--TO DESIGN-->
                    <span class="bold">DISEÑAR</span>
                </div>
            </div>
            <!--PRODUCTOS DESTACADOS-->

        </div>
    </div>

</body>
</html>
