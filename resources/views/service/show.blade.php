@extends('layouts.main')
@section('content')
<section id="service">
    <div class="container">
        <div>
            <div class="section-title text-center">{{$service->id}}.{{$service->name}}</div>
        </div>
        <div class="section-title text-center">
            <div>{{$service->price}}</div>
        </div>
        <div class="text-center section-title">
            <form action="{{ route('service.delete', $service->id)}}" method="post">
                @csrf
                @method('delete')
                <input type="submit" value="Удалить" class="btn btn-danger section-title text-center">
            </form>
        </div>
        <div class="text-center section-title">
            <a href="{{ route('service.index') }}" class="btn btn-primary section-title text-center">Назад</a>
        </div>
    </div>
</section>
@endsection