<?php 

namespace App\Facade;

use App\Services\UserService;
use Illuminate\Support\Facades\Facade;

class UserFacade extends Facade
{
  protected static function getFacadeAccessor()
  {
    return UserService::class;
  }
}