<?php

namespace App\Services\Car;

use App\Repositories\CarRepositoryEloquent;
use Laravel\Lumen\Routing\Controller as BaseController;

class Service extends BaseController
{
    public function __construct(public CarRepositoryEloquent $cars)
    {
    }
}
