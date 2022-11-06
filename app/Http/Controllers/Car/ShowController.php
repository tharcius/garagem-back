<?php

namespace App\Http\Controllers\Car;

use App\Http\Controllers\Controller;
use App\Repositories\CarRepositoryEloquent;

class ShowController extends Controller
{
    public function __construct(private CarRepositoryEloquent $cars)
    {
    }

    public function execute(int $id)
    {
        return response()->json($this->cars->with('user')->find($id));
    }
}
