<?php

namespace App\Http\Controllers;

use App\Http\Resources\PostResource;
use App\Repositories\PostListRepository;
use App\Services\PostListService;
use CrudApiRestfull\Controllers\RestListController;

final class PostListController extends RestListController
{

    public function __construct(PostListRepository $postListRepository)
    {
        $this->repository = $postListRepository;
        $this->apiResource = PostResource::class;
    }
}
