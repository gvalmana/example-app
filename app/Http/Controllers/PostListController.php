<?php

namespace App\Http\Controllers;

use App\Http\Resources\PostResource;
use App\Services\PostListService;
use CrudApiRestfull\Controllers\RestListController;

final class PostListController extends RestListController
{

    public function __construct(PostListService $postService)
    {
        $this->service = $postService;
        $this->apiResource = PostResource::class;
    }
}
