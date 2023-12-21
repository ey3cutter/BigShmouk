@extends('layouts\main')
@section('content')

<section id="service">
  <div class="container">
    <h3 class="section-title text-center mb-6">Добавить оборудование</h6>
    <form class="row g-3" action="{{route('equipment.store')}}" method="post">
      @csrf
      {{-- <div class="col-auto mr-5">
        <label for="name" class="section-title">Тип оборудования</label>
        <input type="text" class="form-control section-subtitle" id="name" name="name">
      </div> --}}
      <select class="form-select col-auto mr-5" aria-label="Default select example" id="equipment_type" name="equipment_type">
        <option selected class="section-title">Выберите тип оборудования</option>
        <option value="Микрофон" class="section-title">Микрофон</option>
        <option value="Мониторная акустика" class="section-title">Мониторная акустика</option>
        <option value="Звуковая карта" class="section-title">Звуковая карта</option>
      </select>
      <div class="col-auto">
        <label for="price" class="section-title">Бренд</label>
        <input type="text" class="form-control section-subtitle" id="equipment_brand" name="equipment_brand">
      </div>
      <div class="col-auto">
        <label for="price" class="section-title">Модель</label>
        <input type="text" class="form-control section-subtitle" id="model" name="model">
      </div>
      <div class="col-auto">
        <label for="price" class="section-title">Цена</label>
        <input type="text" class="form-control section-subtitle" id="price" name="price">
      </div>
      <div>
        <button type="submit" class="btn btn-primary section-title mt-4">Добавить</button>
      </div>
      <div>
        <a href="{{ route('equipment.index') }}" class="btn btn-primary section-title mt-4">Назад</a>
      </div>
    </form>
  </div>
</section>  

@endsection