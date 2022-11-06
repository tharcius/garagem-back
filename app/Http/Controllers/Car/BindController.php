<?php

namespace App\Http\Controllers\Car;

use App\Http\Controllers\Controller;
use App\Services\Car\BindService;
use Illuminate\Http\Request;

class BindController extends Controller
{
    public function __construct(private BindService $service)
    {
    }

    public function execute(Request $request)
    {
        $this->validate(
            request(), [
                'car_id' => 'required|exists:cars,id',
                'user_id' => 'required|exists:users,id',
            ]
        );

        return response()->json($this->service->execute($request));
    }
}
