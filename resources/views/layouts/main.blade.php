<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/bootstrap-5.3.2-dist/css/bootstrap.css">

    <link rel="stylesheet" href="/bootstrap-5.3.2-dist/js/bootstrap.js">
    <!-- font icons -->
    <link rel="stylesheet" href="assets/vendors/themify-icons/css/themify-icons.css">

    <!-- Bootstrap + Big Shmouk Studio main styles -->
	<link rel="stylesheet" href="assets/css/bigshmouk-studio.css">

    <title>Веб-приложение</title>
</head>
<body data-spy="scroll" data-target=".navbar" data-offset="40" id="home">

    @include('layouts.navigation')
    
    @yield('content')
    
    <section class="has-bg-img py-0">
        <div class="container">
            <div class="footer">
                <div class="footer-lists">
                    <ul class="list">
                        <li class="list-head">
                            <h6 class="font-weight-bold">О НАС</h6>
                        </li>
                        <li class="list-body">
                            <a href="{{route('welcome')}}" class="logo">
                                <img src="assets/imgs/logo.png">
                                <h6>BIG SHMOUK RECORDS</h6>
                            </a>
                            <p>Создай свой лучший трек с лучшей командой. Присоединяйся!</p> 
                            <p class="mt-3">
                                Copyright <script>document.write(new Date().getFullYear())</script> &copy; <a class="d-inline text-primary" href="http://www.vk.com/ey3cutter">BIG SHMOUK RECORDS</a>
                            </p>                   
                        </li>
                    </ul>
                    <ul class="list">
                        <li class="list-head">
                            <h6 class="font-weight-bold">ССЫЛКИ</h6>
                        </li>
                        <li class="list-body">
                            <div class="row">
                                <div class="col">
                                    <a href="{{route('welcome')}}#about">О нас</a>
                                    <a href="{{route('welcome')}}#service">Сервис</a>
                                    <a href="{{route('welcome')}}#portfolio">Портфолио</a>
                                </div>
                                <div class="col">
                                    <a href="{{route('welcome')}}#testmonail">Отзывы</a>
                                    <a href="{{route('welcome')}}#team">Команда</a>                  
                                </div>
                            </div>
                        </li>
                    </ul>
                    <ul class="list">
                        <li class="list-head">
                            <h6 class="font-weight-bold">КОНТАКТЫ</h6>
                        </li>
                        <li class="list-body">
                            <p><i class="ti-location-pin"></i>Свердовская обл, г Екатеринбург, ул Маршалла Жукова, д 42</p>
                            <p><i class="ti-email"></i>  contact@bigshmouk.com</p>
                            <div class="social-links">
                                <a href="https://facebook.com" class="link"><i class="ti-facebook"></i></a>
                                <a href="https://twitter.com" class="link"><i class="ti-twitter-alt"></i></a>
                                <a href="https://pinterest.com" class="link"><i class="ti-pinterest-alt"></i></a>
                                <a href="https://instagram.com" class="link"><i class="ti-instagram"></i></a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>    
        </div>
    </section>
</body>
</html>