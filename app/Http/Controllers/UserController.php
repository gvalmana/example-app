<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Services\UserService;
use CrudApiRestfull\Controllers\RestController;

final class UserController extends RestController
{
    public function __construct(User $modelClass, UserService $userService)
    {
        $this->modelClass = $modelClass;
        $this->service = $userService;
    }
}
