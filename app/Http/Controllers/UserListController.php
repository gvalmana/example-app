<?php

namespace App\Http\Controllers;

use App\Http\Resources\UserResource;
use CrudApiRestfull\Controllers\RestListController;
use App\Repositories\UserRepository;
final class UserListController extends RestListController
{
    public function __construct(UserRepository $userRepository)
    {
        $this->repository = $userRepository;
        $this->apiResource = UserResource::class;
    }
}
