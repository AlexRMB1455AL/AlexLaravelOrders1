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
    <label for="service">Выберите сервис:</label>
    <select name="service_id" id="service" class="form-control">
        @foreach ($services as $service)
            <option value="{{ $service->id }}">{{ $service->name }}</option>
        @endforeach
    </select>
</div>

</div>

@endsection