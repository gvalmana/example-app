<?php

namespace App\Services;

use App\Models\Post;
use CrudApiRestfull\Repository\ListRepository;

class PostListRepository extends ListRepository
{

    public $modelClass= Post::class;

    public function __construct()
    {
        $this->modelClass = new Post;
    }
}
