<?php

namespace App\Services;

use App\Models\Post;
use CrudApiRestfull\Services\ServicesCreateOrUpdate;

final class PostUpdateOrCreateService extends ServicesCreateOrUpdate
{
    public $modelClass= Post::class;

    public function __construct()
    {
        $this->modelClass = new Post;
    }
}
