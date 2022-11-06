<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Repositories\UserRepositoryEloquent;

class ShowController extends Controller
{
    public function __construct(private UserRepositoryEloquent $users)
    {
    }

    public function execute($id)
    {
        return response()->json($this->users->with('cars')->find($id));
    }
}
