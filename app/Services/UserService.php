<?php 

namespace App\Services;

use App\Models\User;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class UserService
{
  public function createUser(array $data)
  {
    $imageUrl = $this->storeFile($data['image']);
    $password = $this->hashPassword($data['password']);
    $data['password'] = $password;
    $data['image_path'] = $imageUrl;
    unset($data['image']);
    return User::query()->create($data);
  }

  public function updateUser(User $user, array $data)
  {
    if($data['image'])
    {
      $imagePath = $this->storeFile($data['image']);
      $data['image_path'] = $imagePath;
      unset($data['image']); 
    }
    $user->update($data);
  }


  public function storeFile(UploadedFile $file)
  {
    $filePath = Storage::disk('public')->putFile('avatars', $file);
    return $filePath;
  }


  public function hashPassword(string $password)
  {
    return Hash::make($password);
  }


}