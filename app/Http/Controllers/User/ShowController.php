<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Services\User\ShowService;

class ShowController extends Controller
{
    public function __construct(private ShowService $service)
    {
    }

    public function execute($id)
    {
        return response()->json($this->service->execute($id));
    }
}
