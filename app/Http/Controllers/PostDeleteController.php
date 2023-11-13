<?php

namespace App\Http\Controllers;

use App\Http\Resources\PostResource;
use App\Services\PostDeleteService;
use CrudApiRestfull\Controllers\RestDeleteController;

final class PostDeleteController extends RestDeleteController
{
    public function __construct(PostDeleteService $postService)
    {
        $this->service = $postService;
        $this->apiResource = PostResource::class;
    }
}
