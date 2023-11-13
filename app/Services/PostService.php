<?php

namespace App\Services;

use App\Models\Post;
use CrudApiRestfull\Services\Services;

class PostService extends Services
{

    public $modelClass= Post::class;

    public function __construct()
    {
        $this->modelClass = new Post();
    }
}
