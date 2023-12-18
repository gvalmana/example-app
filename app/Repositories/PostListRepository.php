<?php

namespace App\Repositories;

use App\Models\Post;
use CrudApiRestfull\Repositories\ListRepository;

class PostListRepository extends ListRepository
{

    public $modelClass= Post::class;

    public function __construct()
    {
        $this->modelClass = new Post;
    }
}
