@extends('layouts.main')
@section('content')
<section id="service">
    <div class="container">
        <h3 class="section-title text-center">Список услуг</h6>
        @foreach ($services as $item)
        <div><a class="section-title text-center" href="{{ route('service.show', $item->id) }}">{{$item->id}}.{{$item->name}}</a></div>    
        @endforeach
        <div class="mt-3">
            <a href="{{route('service.create')}}" class="btn btn-primary section-title">Добавить услугу</a>
        </div>
    </div>
</section>
@endsection