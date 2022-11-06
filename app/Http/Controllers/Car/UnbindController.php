<?php

namespace App\Http\Controllers\Car;

use App\Http\Controllers\Controller;
use App\Services\Car\UnbindService;

class UnbindController extends Controller
{
    public function __construct(private UnbindService $service)
    {
    }

    public function execute(int $id)
    {
        return response()->json($this->service->execute($id));
    }
}
