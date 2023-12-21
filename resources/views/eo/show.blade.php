@extends('layouts.main')
@section('content')
<section id="service">
    <div class="container">
        <div>
            <div class="section-title text-center">Заказал: {{$eo->e_users[0]->name_surname}}</div>
        </div>
        <div class="section-title text-center">
            <div>Бренд: {{$eo->e_equipment[0]->equipment_brand}}</div>
        </div>
        <div class="section-title text-center">
            <div>Тип оборудования: {{$eo->e_equipment[0]->equipment_type}}</div>
        </div>
        <div class="section-title text-center">
            <div>Модель: {{$eo->e_equipment[0]->model}}</div>
        </div>
        <div class="section-title text-center">
            <div>Цена: {{$eo->e_equipment[0]->price}}</div>
        </div>
        <div class="section-title text-center">
            <div>Дата заказа: {{$eo->date_of_order}}</div>
        </div>
        <div class="text-center section-title">
            <a href="{{ route('eo.index') }}" class="btn btn-primary section-title text-center">Назад</a>
        </div>
    </div>
</section>
@endsection