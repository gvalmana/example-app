<?php

namespace App\Http\Controllers;

use App\Http\Resources\UserResource;
use App\Services\UserService;
use CrudApiRestfull\Controllers\RestListController;

final class UserListController extends RestListController
{
    public function __construct(UserService $userService)
    {
        $this->service = $userService;
        $this->apiResource = UserResource::class;
    }
}
