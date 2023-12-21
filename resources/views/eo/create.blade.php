@extends('layouts\main')
@section('content')

<section id="service">
  <div class="container">
    <h3 class="section-title text-center mb-6">Создать заказ на оборудование</h3>
    <form class="row g-3" action="{{route('eo.store')}}" method="post">
      @csrf
      <select class="form-select col-auto mr-5" aria-label="Default select example" id="equipment_id" name="equipment_id">
        <option selected class="section-title">Выберите оборудование</option>
        @foreach ($equipment as $eq)
          <option value="{{$eq->id}}">{{$eq->equipment_type}}, {{$eq->equipment_brand}}, {{$eq->model}}, {{$eq->price}} рублей</option>
        @endforeach
      </select>
      <select class="form-select col-auto mr-5" aria-label="Default select example" id="user_id" name="user_id">
        <option selected class="section-title">Выберите пользователя</option>
        
          <option value="{{ Auth::user()->id }}">{{ Auth::user()->name_surname }}</option>
        
      </select>
      <div class="col-auto">
        
          <label for="date" class="section-title">
            Выберите дату:
            <input type="date" name="date_of_order" id="date_of_order" min="{{ date('Y-m-d H:i:s') }}" max="2099-12-31" />
          </label>
      
      </div>

      <div class="col-auto">
        <button type="submit" class="btn btn-primary section-title mt-4">Создать</button>
      </div>
      <div class="col-auto">
        <a href="{{ route('eo.index') }}" class="btn btn-primary section-title mt-4">Назад</a>
      </div>
    </form>
  </div>
</section>  

@endsection