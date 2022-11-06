<?php

namespace App\Http\Controllers\Car;

use App\Http\Controllers\Controller;
use App\Repositories\CarRepositoryEloquent;

class IndexController extends Controller
{
    public function __construct(private CarRepositoryEloquent $cars)
    {
    }

    public function execute()
    {
        return response()->json($this->cars->with(['user'])->all());
    }
}
