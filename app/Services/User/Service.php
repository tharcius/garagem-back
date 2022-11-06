<?php

namespace App\Services\User;

use App\Repositories\UserRepositoryEloquent;
use Laravel\Lumen\Routing\Controller as BaseController;

class Service extends BaseController
{
    public function __construct(public UserRepositoryEloquent $users)
    {
    }
}
