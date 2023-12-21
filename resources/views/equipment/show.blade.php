@extends('layouts.main')
@section('content')
<section id="service">
    <div class="container">
        <div>
            <div class="section-title text-center">Модель: {{$equipment->model}}</div>
        </div>
        <div class="section-title text-center">
            <div>Тип: {{$equipment->equipment_type}}</div>
        </div>
        <div class="section-title text-center">
            <div>Бренд: {{$equipment->equipment_brand}}</div>
        </div>
        <div class="section-title text-center">
            <div>Цена: {{$equipment->price}}</div>
        </div>
        <div class="text-center section-title">
            <form action="{{ route('equipment.delete', $equipment->id)}}" method="post">
                @csrf
                @method('delete')
                <input type="submit" value="Удалить" class="btn btn-danger section-title text-center">
            </form>
        </div>
        <div class="text-center section-title">
            <a href="{{ route('equipment.index') }}" class="btn btn-primary section-title text-center">Назад</a>
        </div>
    </div>
</section>
@endsection