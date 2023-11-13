<?php

namespace App\Http\Controllers;

use App\Http\Resources\PostResource;
use App\Services\PostService;
use CrudApiRestfull\Controllers\RestController;

final class PostController extends RestController
{

    public function __construct(PostService $postService)
    {
        $this->service = $postService;
        $this->apiResource = PostResource::class;
    }
}
