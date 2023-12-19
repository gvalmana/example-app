<?php

namespace App\Http\Controllers;

use App\Http\Resources\UserResource;
use App\Repositories\UserRepository;
use CrudApiRestfull\Controllers\RestController;

final class UserListController extends RestController
{
    public function __construct(UserRepository $userRepository)
    {
        $this->repository = $userRepository;
        $this->apiResource = UserResource::class;
    }
}
