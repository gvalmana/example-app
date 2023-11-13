<?php

namespace App\Services;

use App\Models\Post;
use CrudApiRestfull\Services\ServicesDelete;

class PostDeleteService extends ServicesDelete
{
    public $modelClass= Post::class;

    public function __construct()
    {
        $this->modelClass = new Post;
    }
}
