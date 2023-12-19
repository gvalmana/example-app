<?php

namespace App\Http\Controllers;

use App\Http\Resources\PostResource;
use App\Repositories\PostUpdateOrCreateRepository;
use CrudApiRestfull\Controllers\RestCreateOrUpdateController;

final class PostCreateOrUpdateController extends RestCreateOrUpdateController
{
    public function __construct(PostUpdateOrCreateRepository $postUpdateOrCreateRepository)
    {
        $this->repository = $postUpdateOrCreateRepository;
        $this->apiResource = PostResource::class;
    }
}
