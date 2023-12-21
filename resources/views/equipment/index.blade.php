@extends('layouts.main')
@section('content')
<section id="service">
    <div class="container">
        <h3 class="section-title text-center">Список оборудования</h6>
        @foreach ($equipments as $item)
        <div><a class="section-title text-center" href="{{ route('equipment.show', $item->id) }}">{{$item->id}}.{{$item->model}}</a></div>    
        @endforeach
        <div class="mt-3">
            <a href="{{route('equipment.create')}}" class="btn btn-primary section-title">Добавить оборудование</a>
        </div>
    </div>
</section>
@endsection