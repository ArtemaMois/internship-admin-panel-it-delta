<?php

namespace App\Http\Controllers;

use App\Facade\UserFacade;
use App\Http\Requests\User\StoreUserRequest;
use App\Models\User;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view('', ['users' => $users]);
    }

    public function create()
    {
        return view('pages.create_user');
    }

    public function store(StoreUserRequest $request)
    {
        dd($request->validated()['image']);
        $user = UserFacade::createUser($request->validated());
        return redirect()->route('users.index');
    }

    public function update(user $user)
    {

    }

    public function edit(User $user)
    {
        
    }

    public function show(User $user)
    {

    }

    public function delete()
    {

    }
}
