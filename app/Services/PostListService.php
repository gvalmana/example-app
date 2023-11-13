<?php

namespace App\Services;

use App\Models\Post;
use CrudApiRestfull\Services\ServicesList;

class PostListService extends ServicesList
{

    public $modelClass= Post::class;

    public function __construct()
    {
        $this->modelClass = new Post;
    }
}
