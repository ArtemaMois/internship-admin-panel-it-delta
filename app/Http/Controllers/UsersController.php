<?php

namespace App\Http\Controllers;

use App\Facade\UserFacade;
use App\Http\Requests\User\StoreUserRequest;
use App\Http\Requests\User\UpdateUserRequest;
use App\Models\User;
use Dotenv\Util\Str;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    // получем всех юзеров
    public function index()
    {
        $users = User::all();
        return view('pages.index', ['users' => $users]);
    }

    // отдаем страничку с формой для создания
    public function create()
    {
        return view('pages.create_user');
    }

    // сохраняем пользователя
    public function store(StoreUserRequest $request)
    {
        $user = UserFacade::createUser($request->validated());
        return redirect()->route('users.index');
    }

    // отдаем страничку с формой для обновления
    public function update(User $user)
    {
        return view('pages.update_user', ['user' => $user]);
    }

    // обновляем юзера
    public function edit(User $user, UpdateUserRequest $request)
    {
        UserFacade::updateUser($user, $request->validated());
        return redirect()->route('users.index');
    }

    // отдаем страницу с инфой о юзере
    public function show(User $user)
    {
        return view('pages.show_user', ['user' => $user]);
    }

    // удалем юзера
    public function delete(User $user)
    {
        $user->delete();
        return redirect()->route('users.index');
    }
}
