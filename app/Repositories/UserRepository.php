<?php
namespace App\Repositories;

use App\Models\User;
use CrudApiRestfull\Repositories\ListRepository;

class UserRepository extends ListRepository
{
    public $modelClass = User::class;

    public function __construct()
    {
        $this->modelClass = new User;
    }
}
