<?php
namespace App\Services;

use App\Models\User;
use CrudApiRestfull\Services\Services;

class UserService extends Services
{
    public $modelClass = User::class;

    public function __construct()
    {
        $this->modelClass = new User();
    }
}
