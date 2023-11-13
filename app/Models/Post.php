<?php

namespace App\Models;

use CrudApiRestfull\Models\RestModel;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends RestModel
{
    use HasFactory, SoftDeletes;
    /**
     * @param array $parameters
     * @return mixed
     */
    protected $scenario = "create";

    /**
     * /**
     * The name of the model name parameters
     *
     * @var string
     */
    const MODEL = Post::class;

    /**
     * /**
     * Relations of entity
     *
     * @var array
     */
    const RELATIONS = ['user'];
    protected $fillable = [
        'name',
        'content',
        'user_id',
    ];
    protected $casts = [
        'name' => 'string',
        'content' => 'text',
        'created_at' => 'date',
        'updated_at' => 'date',
        'deleted_at' => 'date'
    ];
}
