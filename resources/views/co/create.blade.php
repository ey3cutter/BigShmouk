@extends('layouts\main')
@section('content')

<section id="service">
  <div class="container">
    <h3 class="section-title text-center mb-6">Создать заказ</h3>
    <form class="row g-3" action="{{route('co.store')}}" method="post">
      @csrf
      <select class="form-select col-auto mr-5" aria-label="Default select example" id="service_id" name="service_id">
        <option selected class="section-title">Выберите тип услуги</option>
        @foreach ($service as $serv)
          <option value="{{$serv->id}}">{{$serv->name}}, {{$serv->price}}</option>
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
      {{-- <div class="col-auto">
        <h3 class="text-center">Цена: {{$service->c_service[0]->price}}</h3>
      </div> --}}
      <div class="col-auto">
        <button type="submit" class="btn btn-primary section-title mt-4">Создать</button>
      </div>
      <div class="col-auto">
        <a href="{{ route('app.home') }}" class="btn btn-primary section-title mt-4">Назад</a>
      </div>
    </form>
  </div>
</section>  

@endsection