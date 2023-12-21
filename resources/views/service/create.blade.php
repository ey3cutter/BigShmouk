@extends('layouts\main')
@section('content')

<section id="service">
  <div class="container">
    <h3 class="section-title text-center mb-6">Добавить услугу</h6>
    <form class="row g-3" action="{{route('service.store')}}" method="post">
      @csrf
      <div class="col-auto mr-5">
        <label for="name" class="section-title">Наименование услуги</label>
        <input type="text" class="form-control section-subtitle" id="name" name="name">
      </div>
      <div class="col-auto">
        <label for="price" class="section-title">Цена</label>
        <input type="text" class="form-control section-subtitle" id="price" name="price">
      </div>
      <div>
        <button type="submit" class="btn btn-primary section-title mt-4">Добавить</button>
      </div>
      <div>
        <a href="{{ route('service.index') }}" class="btn btn-primary section-title mt-4">Назад</a>
      </div>
    </form>
  </div>
</section>  

@endsection