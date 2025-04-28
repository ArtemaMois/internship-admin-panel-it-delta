@extends('templates.main')
@section('content')
<div class="userinfo__header">
  <div class="userinfo__avatar">
    <img class="userinfo__image" src="{{ asset('storage/'. $user->image_path) }}" alt="" width="150" height="150">
  </div>
  <div class="userinfo__text">
    <h1 class="userinfo__name">{{ $user->name }}</h1>
    <h3 class="userinfo__login">{{ $user->login }}</h3>
  </div>
</div>
<div class="userinfo">
  <div class="userinfo__row">
    <div class="userinfo__label">Дата рождения: </div>
    <div class="userinfo__value">{{ $user->birth_date }}</div>
  </div>
  <div class="userinfo__row">
    <div class="userinfo__label">Телефон: </div>
    <div class="userinfo__value">{{ $user->phone }}</div>
  </div>
  <div class="userinfo__row">
    <div class="userinfo__label">E-mail: </div>
    <div class="userinfo__value">{{ $user->email }}</div>
  </div>

</div>

@endsection