<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Регистрация</title>
    <link rel="stylesheet" href="assets/vendors/themify-icons/css/themify-icons.css">
    <link rel="stylesheet" href="assets/css/bigshmouk-studio.css">
</head>
<body>
    <div class="container">
        <div class="row">

            <div class="col-md-4 offset-md-4">
                <div class="card form-holder">
                    <div class="card-body">
                        <h1>Регистрация клиента</h1>

                        @if (Session::has('error'))
                            <p class="text-danger">{{ Session::get('error') }}</p>
                        @endif

                        <form action="{{ route('auth.register') }}" method="post">
                            @csrf
                            @method('post')
                            <div class="form-group">
                                <label>Имя и фамилия</label>
                                <input type="text" name="name_surname" class="form-control" placeholder="Имя и фамилия" />
                                @if ($errors->has('name_surname'))
                                    <p class="text-danger">{{ $errors->first('name_surname') }}</p>
                                @endif
                            </div>

                            <div class="form-group">
                                <label>Номер телефона</label>
                                <input type="text" name="phone" class="form-control" placeholder="Номер телефона" />
                                @if ($errors->has('phone'))
                                    <p class="text-danger">{{ $errors->first('phone') }}</p>
                                @endif
                            </div>

                            <div class="form-group">
                                <label>Email</label>
                                <input type="email" name="email" class="form-control" placeholder="Email" />
                                @if ($errors->has('email'))
                                    <p class="text-danger">{{ $errors->first('email') }}</p>
                                @endif
                            </div>

                            <div class="form-group">
                                <label>Пароль</label>
                                <input type="password" name="password" class="form-control" placeholder="Пароль" />
                                @if ($errors->has('password'))
                                    <p class="text-danger">{{ $errors->first('password') }}</p>
                                @endif
                            </div>
                            <div class="form-group">
                                <label>Подтвердите ваш пароль</label>
                                <input type="password" name="password_confirmation" class="form-control"
                                    placeholder="Введите ваш пароль" />
                            </div>
                            <div class="row">
                                <div class="col-4 text-right">
                                    <input type="submit" class="btn btn-primary" value=" Зарегистрироваться " />
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>