<?php
namespace App\Services;

use App\Models\User;
use CrudApiRestfull\Services\Services;
use CrudApiRestfull\Services\ServicesList;

class UserService extends ServicesList
{
    public $modelClass = User::class;

    public function __construct()
    {
        $this->modelClass = new User;
    }
}
