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
        'created_at' => 'date',
        'updated_at' => 'date',
        'deleted_at' => 'date'
    ];
    public $rules = [
        'create' => [
            'name'=>['required'],
            'content'=>['required'],
            'user_id'=>['required','exists:users,id'],
        ],
        'update' => [
            'name'=>['required'],
            'content'=>['required'],
            'user_id'=>['required','exists:users,id'],
        ],
    ];
    public function getPrimaryKey(): string
    {
        return $this->primaryKey;
    }

    public function getPrincipalAttribute(): string
    {
        return 'email';
    }
    public function user()
    {
        return $this->belongsTo(User::class,'user_id','id');
    }
}
