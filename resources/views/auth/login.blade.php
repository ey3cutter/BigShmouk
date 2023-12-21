<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Авторизация</title>
    <link rel="stylesheet" href="assets/vendors/themify-icons/css/themify-icons.css">
    <link rel="stylesheet" href="assets/css/bigshmouk-studio.css">
</head>
<body>
    <div class="container">
        <div class="col-xs-4 col-xs-offset-4">
            <div class="row">
                <div class="col-md-4 offset-md-4">
                    <div class="card form-holder">
                        <div class="card-body">
                            <h1>Авторизация</h1>
    
                            @if (Session::has('error'))
                                <p class="text-danger">{{ Session::get('error') }}</p>
                            @endif
                            @if (Session::has('success'))
                                <p class="text-success">{{ Session::get('success') }}</p>
                            @endif
    
                            <form action="{{ route('auth.login') }}" method="post">
                                @csrf
                                @method('post')
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
                                <div class="row">
                                    <div class="col-4 text-right">
                                        <input type="submit" class="btn btn-primary" value=" Авторизация " />
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>