<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Repositories\UserRepositoryEloquent;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function __construct(private UserRepositoryEloquent $users)
    {
    }

    public function execute(Request $request)
    {
        return response()->json($this->users->with(['cars'])->all());
    }
}
