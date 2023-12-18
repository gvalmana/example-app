<?php

namespace App\Repositories;

use App\Models\Post;
use CrudApiRestfull\Repositories\CreateOrUpdateRepository;

final class PostUpdateOrCreateRepository extends CreateOrUpdateRepository
{
    public $modelClass= Post::class;

    public function __construct()
    {
        $this->modelClass = new Post;
    }
}
