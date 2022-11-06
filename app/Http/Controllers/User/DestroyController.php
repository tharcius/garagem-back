<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Services\User\DestroyService;

class DestroyController extends Controller
{
    public function __construct(private DestroyService $service)
    {
    }

    public function execute(int $id)
    {
        return response()->json($this->service->execute($id));
    }
}
