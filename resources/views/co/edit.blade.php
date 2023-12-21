@extends('layouts\main')
@section('content')

<section id="service">
  <div class="container">
    <h3 class="section-title text-center mb-6">Принять/отклонить заказ клиента</h6>
    <form class="row g-3" action="{{route('co.accept', $co->id)}}" method="post">
      @csrf
      @method('patch')
      <select class="form-select col-auto mr-5" aria-label="Default select example" id="status" name="status">
        <option selected class="section-title">Выберите тип статуса заказа</option>
        <option value="Принято" class="section-title">Принято</option>
        <option value="Отклонено" class="section-title">Отклонено</option>
      </select>
      <div class="col-auto">
        <label for="user_id" class="section-title">ID клиента</label>
        <input value="{{$co->user_id}}" type="text" class="form-control section-subtitle" id="user_id" name="user_id">
      </div>
      <div class="col-auto">
        <label for="service_id" class="section-title">ID услуги</label>
        <input value="{{$co->service_id}}" type="text" class="form-control section-subtitle" id="service_id" name="service_id">
      </div>
      <div class="col-auto">
        <label for="email" class="section-title">Дата заказа</label>
        <input value="{{$co->date_of_order}}" type="date" class="form-control section-subtitle" id="date_of_order" name="date_of_order">
      </div>
      
      <div>
        <button type="submit" class="btn btn-primary section-title mt-4">Изменить</button>
      </div>
      <div>
        <a href="{{ route('co.index') }}" class="btn btn-primary section-title mt-4">Назад</a>
      </div>
    </form>
  </div>
</section>  

@endsection