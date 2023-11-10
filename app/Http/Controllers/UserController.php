<?php

namespace App\Http\Controllers;

use App\Http\Resources\UserResource;
use App\Services\UserService;
use CrudApiRestfull\Controllers\RestController;

final class UserController extends RestController
{
    public function __construct(UserService $userService)
    {
        $this->service = $userService;
        $this->apiResource = UserResource::class;
    }
}
