<?php

namespace App\Http\Controllers;

use App\Http\Resources\PostResource;
use App\Services\PostUpdateOrCreateService;
use CrudApiRestfull\Controllers\RestCreateOrUpdateController;

final class PostCreateOrUpdateController extends RestCreateOrUpdateController
{
    public function __construct(PostUpdateOrCreateService $postService)
    {
        $this->service = $postService;
        $this->apiResource = PostResource::class;
    }
}
