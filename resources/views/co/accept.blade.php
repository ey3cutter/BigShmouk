@extends('layouts.main')
@section('content')
<section id="service">
    <div class="section-title text-center">Данные о пользователе успешно изменены!</div>
    <div class="text-center">
        <a href="{{ route('equipment.index') }}" class="btn btn-primary section-title mt-4">Назад</a>
    </div>
</section>
@endsection