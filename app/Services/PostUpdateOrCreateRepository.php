<?php

namespace App\Services;

use App\Models\Post;
use CrudApiRestfull\Repository\CreateOrUpdateRepository;

final class PostUpdateOrCreateRepository extends CreateOrUpdateRepository
{
    public $modelClass= Post::class;

    public function __construct()
    {
        $this->modelClass = new Post;
    }
}
