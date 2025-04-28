@extends('templates.main')
@section('content')
    <ul class="list-group ">
        @foreach ($users as $user)
            <li class="list-group-item d-flex justify-content-between align-items-start user">
                <img class="user__image" src="{{ asset('storage/'. $user->image_path) }}" alt="" width="40" height="40">
                <div class="ms-2 me-auto text-muted">
                    <div class="fw-bold user__login"><a href={{ route('users.show', ['user' => $user]) }}>{{ $user->login }}</a></div>
                    <div class="user__name">{{ $user->name }}</div>
                </div>
                <div class="options d-flex gap-3">
                  <div class="btn btn-primary">Edit</div>
                  <div class="btn btn-danger">Delete</div>
                </div>
            </li>
        @endforeach
    </ul>
@endsection
