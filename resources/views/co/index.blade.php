@extends('layouts.main')
@section('content')
<section id="service">
    <div class="container">
        <h3 class="section-title text-center">Список заказов</h6>
        @foreach ($co as $item)
        <div><a class="section-title text-center" href="{{ route('co.show', $item->id) }}">Заказ {{$item->id}}</a></div>    
        @endforeach
        {{-- <div class="mt-3">
            <a href="{{route('co.create')}}" class="btn btn-primary section-title">Обработать заказ клиента</a>
        </div> --}}
    </div>
</section>
@endsection