<?php 

namespace App\Services;

use App\Models\User;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class UserService
{

  // функция для создания пользователя
  public function createUser(array $data): User
  {
    $imageUrl = $this->storeFile($data['image']);
    $password = $this->hashPassword($data['password']);
    $data['password'] = $password;
    $data['image_path'] = $imageUrl;
    unset($data['image']);
    return User::query()->create($data);
  }


  // функция для обновления пользователя
  public function updateUser(User $user, array $data)
  {
    if(isset($data['image']))
    {
      $imagePath = $this->storeFile($data['image']);
      $data['image_path'] = $imagePath;
      unset($data['image']); 
    }
    $user->update($data);
  }


  // функция для сохранения файла
  private function storeFile(UploadedFile $file): bool|string
  {
    $filePath = Storage::disk('public')->putFile('avatars', $file);
    return $filePath;
  }

  // хэшируем пароль
  private function hashPassword(string $password): string
  {
    return Hash::make($password);
  }


}