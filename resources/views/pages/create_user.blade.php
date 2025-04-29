@extends('templates.main')
@section('content')
    <form action="{{ route('users.store') }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="inputName" class="form-label">ФИО</label>
            <input type="text" name="name" value="{{ old('name') }}" class="form-control" id="inputName"
                aria-describedby="emailHelp">
            <div id="nameHelp" class="form-text">
                @if ($errors->has('name'))
                    <div class="error">{{ $errors->first('name') }}</div>
                @endif
            </div>
        </div>
        <div class="mb-3">
            <label for="inputLogin" class="form-label">Логин</label>
            <input type="text" name="login" class="form-control" value="{{ old('login') }}" id="inputLogin" aria-describedby="emailHelp">
            <div id="nameHelp" class="form-text">
              @if ($errors->has('login'))
                  <div class="error">{{ $errors->first('login') }}</div>
              @endif
          </div>
        </div>
        <div class="mb-3">
            <label for="inputEmail" class="form-label">E-mail</label>
            <input type="text" name="email" class="form-control" id="inputEmail" value="{{ old('email') }}" aria-describedby="emailHelp">
            <div id="nameHelp" class="form-text">
              @if ($errors->has('email'))
                  <div class="error">{{ $errors->first('email') }}</div>
              @endif
          </div>
        </div>
        <div class="mb-3">
            <label for="inputPhone" class="form-label">Номер телефона</label>
            <input type="text" data-maska="+7-###-###-##-##" class="form-control" value="{{ old('phone') }}" id="inputPhone" name="phone"
                placeholder="+7-###-###-##-##" aria-describedby="emailHelp">
                <div id="nameHelp" class="form-text">
                  @if ($errors->has('phone'))
                      <div class="error">{{ $errors->first('phone') }}</div>
                  @endif
              </div>
        </div>
        <div class="mb-3">
            <label for="inputPassword" class="form-label">Пароль</label>
            <input type="password" class="form-control" name="password"  id="inputPassword">
            <div id="nameHelp" class="form-text">
              @if ($errors->has('password'))
                  <div class="error">{{ $errors->first('password') }}</div>
              @endif
          </div>
        </div>
        <div class="mb-3">
            <label for="inputDate" class="form-label">Дата рождения</label>
            <input type="date" class="form-control" name="birth_date" value="{{ old('birth_date') }}" id="inputDate">
            <div id="nameHelp" class="form-text">
              @if ($errors->has('birth_date'))
                  <div class="error">{{ $errors->first('birth_date') }}</div>
              @endif
          </div>
        </div>
        <div class="mb-3">
            <label for="formFile" class="form-label">Фото профиля</label>
            <input class="form-control" name="image" type="file" value="{{ old('image') }}" id="inputFile">
            <div id="nameHelp" class="form-text">
              @if ($errors->has('image'))
                  <div class="error">{{ $errors->first('image') }}</div>
              @endif
          </div>
        </div>
        <button type="submit" class="btn btn-primary">Сохранить</button>
    </form>
@endsection
