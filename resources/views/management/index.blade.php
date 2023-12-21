@extends('layouts.main')
@section('content')
<section id="service">
    <div class="container">
        <h3 class="section-title text-center">Список пользователей</h6>
        @foreach ($user as $u)
        <div><a class="section-title text-center" href="{{ route('management.show', $u->id) }}">{{$u->id}}.{{$u->name_surname}}</a></div>    
        @endforeach
        {{-- <div class="mt-3">
            <a href="{{route('management.edit')}}" class="btn btn-primary section-title">Нанять сотрудника</a>
        </div> --}}
    </div>
</section>
@endsection