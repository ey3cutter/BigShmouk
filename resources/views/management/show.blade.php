@extends('layouts.main')
@section('content')
<section id="service">
    <div class="container">
        <div>
            <div class="section-title text-center">Роль: {{$user->role}}</div>
        </div>
        <div class="section-title text-center">
            <div>Имя и фамилия: {{$user->name_surname}}</div>
        </div>
        <div class="section-title text-center">
            <div>Email: {{$user->email}}</div>
        </div>
        <div class="section-title text-center">
            <div>Номер телефона: {{$user->phone}}</div>
        </div>
        <div class="text-center section-title">
            <a href="{{ route('management.edit', $user->id) }}" class="btn btn-primary section-title text-center">Нанять/уволить</a>
        </div>
        <div class="text-center section-title">
            <a href="{{ route('management.index') }}" class="btn btn-primary section-title text-center">Назад</a>
        </div>
    </div>
</section>
@endsection