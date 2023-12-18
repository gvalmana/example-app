<?php
namespace App\Services;

use App\Models\User;
use CrudApiRestfull\Repositories\BaseRepository;

class UserRepository extends BaseRepository
{
    public $modelClass = User::class;

    public function __construct()
    {
        $this->modelClass = new User;
    }
}
