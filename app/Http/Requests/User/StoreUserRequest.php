<?php

namespace App\Http\Requests\User;

use Illuminate\Foundation\Http\FormRequest;

class StoreUserRequest extends FormRequest
{

    public function rules(): array
    {
        return [
            'name' => ['required', 'min:1', 'string'],
            'login' => ['required', 'min:1', 'string'],
            'phone' => ['required', 'regex:/^\+7-\d{3}-\d{3}-\d{2}-\d{2}$/i'],
            'birth_date' => ['required', 'regex:/^\S{4}-\S{2}-\S{2}$/i', 'date'],
            'email' => ['required', 'email'],
            'password' => ['required', 'min:1'],
            'image' => ['required', 'mimes:png,jpg,jpeg,JPG,JPEG,PNG', "max:2048"],
            
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Требуется ввести ФИО',
            'name.min' => 'Минимальная длина ФИО - 1 символ',
            'name.string' => 'ФИО должно быть строкой',
            'login.required' => 'Требуется ввести логин',
            'login.min' => 'Минимальная длина логина - 1 символ',
            'login.string' => 'Логин должен быть строкой',
            'phone.required' => 'Требуется ввести номер телефона',
            'phone.regex' => 'Неверный формат номера телефона',
            'birth_date.required' => 'Требуется указать дату рождения',
            'birth_date.regex' => 'Неверный формат даты рождения',
            'birth_date.date' => 'Неверная дата рождения',
            'email.required' => 'Требуется ввести электронную почту',
            'email.email' => 'Неверный формат электронной почты',
            'password.required' => 'Требуется ввести пароль',
            'password.min' => 'Минимальная длина пароля - 1 символ',
            'image.mimes' => 'Поддерживаемые форматы изображений: jpg, jpeg, png',
            'image.max' => 'максимальный размер изображения - 2 МБ',
            'image.required' => 'Требуется выбрать фото профиля'
        ];
    }
}
