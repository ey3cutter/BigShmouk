@extends('layouts.main')
@section('content')
<section id="service">
    <div class="section-title text-center">Заказ успешно добавлен!</div>
    <div class="text-center">
        <a href="{{ route('app.home') }}" class="btn btn-primary section-title mt-4">Назад</a>
    </div>
</section>
@endsection