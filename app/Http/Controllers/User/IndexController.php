<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Repositories\UserRepositoryEloquent;

class IndexController extends Controller
{
    public function __construct(private UserRepositoryEloquent $users)
    {
    }

    public function execute()
    {
        return response()->json($this->users->with(['cars'])->all());
    }
}
