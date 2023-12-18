<?php

namespace App\Services;

use App\Models\Post;
use CrudApiRestfull\Repository\DeleteRepository;

class PostDeleteRepository extends DeleteRepository
{
    public $modelClass= Post::class;

    public function __construct()
    {
        $this->modelClass = new Post;
    }
}
