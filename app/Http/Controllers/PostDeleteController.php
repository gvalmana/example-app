<?php

namespace App\Http\Controllers;

use App\Http\Resources\PostResource;
use App\Repositories\PostDeleteRepository;
use CrudApiRestfull\Controllers\RestDeleteController;

final class PostDeleteController extends RestDeleteController
{
    public function __construct(PostDeleteRepository $postDeleteRepository)
    {
        $this->repository = $postDeleteRepository;
        $this->apiResource = PostResource::class;
    }
}
