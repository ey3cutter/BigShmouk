<nav class="navbar custom-navbar navbar-expand-lg navbar-dark" data-spy="affix" data-offset-top="20">
    <div class="container">
        <a class="navbar-brand" href="{{route('app.home')}}">
            <img src="assets/imgs/logo.png">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
                @can('customer')
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('co.create') }}">Заявка на заказ</a>
                </li>
                @endcan
                @can('employee')
                <li class="nav-item">
                    <a class="nav-link" href="{{route('co.index')}}">Заявки на заказ клиентов</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('eo.index')}}">Заявки на заказ оборудования</a>
                </li>
                @endcan
                @can('admin')
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('co.index') }}">Заявки на заказ клиентов</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('eo.index')}}">Заявки на заказ оборудования</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('management.index')}}">Нанять/Уволить</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('service.index')}}">Услуги</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('equipment.index')}}">Склад</a>
                </li>
                @endcan
                <li class="nav-item">
                    <a class="nav-link btn btn-primary btn-sm ml-lg-3" href="{{route('logout')}}">Выйти</a>
                </li>
                {{-- <li class="nav-item">
                    <a class="nav-link" href="{{route('app.make-an-order')}}">Заявка на заказ</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('app.client-orders')}}">Заявки на заказ клиентов</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('app.equipment-orders')}}">Заявки на заказ оборудования</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('app.services')}}">Услуги</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('app.management')}}">Нанять/Уволить</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link btn btn-primary btn-sm ml-lg-3" href="{{route('auth.login')}}">Выйти</a>
                </li> --}}
            </ul>
        </div>
    </div>
</nav>

<header class="header">
    <div class="overlay">
        <h6 class="subtitle">Добро пожаловать</h6>
        <h1 class="title">{{ Auth::user()->name_surname }}!</h1>
        {{-- <div class="buttons text-center">
            @can('customer')
            <a href="#service" class="btn btn-primary rounded w-lg btn-lg my-1">Подать заявку</a>
            @endcan
            @can('admin')
            <a href="#service" class="btn btn-primary rounded w-lg btn-lg my-1">Начать работу</a>
            @endcan
            @can('employee')
            <a href="#service" class="btn btn-primary rounded w-lg btn-lg my-1">Начать работу</a>
            @endcan
            {{-- <a href="#contact" class="btn btn-outline-light rounded w-lg btn-lg my-1"></a> 
        </div>               --}}
    </div>      
</header>