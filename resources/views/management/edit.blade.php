@extends('layouts\main')
@section('content')

<section id="service">
  <div class="container">
    <h3 class="section-title text-center mb-6">Нанять/уволить пользователя</h6>
    <form class="row g-3" action="{{route('management.hire', $user->id)}}" method="post">
      @csrf
      @method('patch')
      <select class="form-select col-auto mr-5" aria-label="Default select example" id="role" name="role">
        <option selected class="section-title">Выберите тип роли пользователя</option>
        <option value="customer" class="section-title">Клиент</option>
        <option value="employee" class="section-title">Сотрудник</option>
      </select>
      <div class="col-auto">
        <label for="price" class="section-title">Имя и фамилия</label>
        <input value="{{$user->name_surname}}" type="text" class="form-control section-subtitle" id="name_surname" name="name_surname">
      </div>
      <div class="col-auto">
        <label for="email" class="section-title">Email</label>
        <input value="{{$user->email}}" type="text" class="form-control section-subtitle" id="email" name="email">
      </div>
      <div class="col-auto">
        <label for="email" class="section-title">Номер телефона</label>
        <input value="{{$user->phone}}" type="text" class="form-control section-subtitle" id="phone" name="phone">
      </div>
      
      <div>
        <button type="submit" class="btn btn-primary section-title mt-4">Изменить</button>
      </div>
      <div>
        <a href="{{ route('equipment.index') }}" class="btn btn-primary section-title mt-4">Назад</a>
      </div>
    </form>
  </div>
</section>  

@endsection