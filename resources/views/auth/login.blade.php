@extends('layouts.app');
@section('content');
<div class="d-grid gap-2 col-6 mx-auto">
<form method="POST" action="/login">
    @csrf
    <div class = "mb-3">
    <input type="email" class="form-control" name="email" placeholder="Email">
    @error('email')
    <div class="text-danger">{{ $message }}</div>
    @enderror  
     </div> 
     <div class = "mb-3">
    <input type="password" class="form-control" name="password" placeholder="Пароль">
    @error('password')
    <div class="text-danger">{{ $message }}</div>
    @enderror  
    </div>  
    <button type="submit" class="btn btn-primary">Добавить пользователя</button>
   
</form>
</div>
<div class="container-lg"><div class="form-group">
  <hr class="border border-primary border-3 opacity-50">
    <label for="email_list">Выберите контраганта:</label>
    <select name="email_select" id="email_list" class="form-control mb-3">

        @foreach ($listEmails as $listEmail)
            <option value="{{ $listEmail->id }}">{{ $listEmail->email }}</option>
        @endforeach
    </select>
    <label for="id_list_order">Выберите номер заказа или создайте новый:</label>
    <select name="id_select_order" id="id_list_order" class="form-control mb-3">

        {{-- @foreach ($id_orders as $id_order)
            <option value="{{ $id_order->id }}">{{ $id_order->email }}</option>
        @endforeach --}}
    </select>
    

</div>
<div class="container">
  <div class="row">
    <div class="col-6 bg-primary text-white p-3">
      <div class="container mt-4">
  <form>
    <div class="mb-3">
      <label for="provider_id" class="form-label">Provider ID</label>
      <input type="number" class="form-control" id="provider_id" name="provider_id" placeholder="Введите provider_id">
    </div>

    <div class="mb-3">
      <label for="service_id" class="form-label">Service ID</label>
      <input type="number" class="form-control" id="service_id" name="service_id" placeholder="Введите service_id">
    </div>

    <div class="mb-3">
      <label for="total_time" class="form-label">Total Time</label>
      <input type="number" class="form-control" id="total_time" name="total_time" placeholder="Например: 8">
    </div>

    <div class="mb-3">
      <label for="earnings" class="form-label">Earnings</label>
      <input type="number" step="1" class="form-control" id="earnings" name="earnings" placeholder="Введите доход">
    </div>

    <div class="mb-3">
      <label for="status" class="form-label">Status</label>
      <select class="form-select" id="status" name="status">
  
        <option value="created">created</option>
        <option value="payed">payed</option>
        <option value="started">started</option>
        <option value="finished">finished</option>
        <option value="confirmed">confirmed</option>
        <option value="closed">closed</option>
        <option value="canceled">canceled</option>
      </select>
    </div>

    <button type="submit" class="btn btn-primary">Сохранить</button>
  </form>
</div>
        
    </div>
    <div class="col-6 bg-success text-white p-3">
    </div>
</div>
</div>
</div>
</div>

@endsection