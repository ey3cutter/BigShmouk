@extends('layouts.main')
@section('content')
<section id="service">
    <div class="container">
        <div>
            <div class="section-title text-center">Заказал: {{$co->c_users[0]->name_surname}}</div>
        </div>
        <div class="section-title text-center">
            <div>Услуга: {{$co->c_services[0]->name}}</div>
        </div>
        <div class="section-title text-center">
            <div>Цена: {{$co->c_services[0]->price}}</div>
        </div>
        <div class="section-title text-center">
            <div>Дата заказа: {{$co->date_of_order}}</div>
        </div>
        <div class="section-title text-center">
            <div>Статус: {{$co->status}}</div>
        </div>
        {{-- <div class="text-center section-title">
            <form action="{{ route('equipment.delete', $equipment->id)}}" method="post">
                @csrf
                @method('delete')
                <input type="submit" value="Удалить" class="btn btn-danger section-title text-center">
            </form>
        </div> --}}
        <div class="text-center section-title">
            <a href="{{ route('co.edit', $co->id) }}" class="btn btn-primary section-title text-center">Принять/отклонить</a>
        </div>
        <div class="text-center section-title">
            <a href="{{ route('co.index') }}" class="btn btn-primary section-title text-center">Назад</a>
        </div>
    </div>
</section>
@endsection