<?php

namespace App\Repositories;

use App\Models\Post;
use CrudApiRestfull\Repositories\DeleteRepository;

class PostDeleteRepository extends DeleteRepository
{
    public $modelClass= Post::class;

    public function __construct()
    {
        $this->modelClass = new Post;
    }
}
