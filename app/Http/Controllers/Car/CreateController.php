<?php

namespace App\Http\Controllers\Car;

use App\Http\Controllers\Controller;
use App\Services\Car\CreateService;
use Illuminate\Http\Request;

class CreateController extends Controller
{
    public function __construct(private CreateService $service)
    {
    }

    public function execute(Request $request)
    {
        $data = $request;
        $this->validate(
            $data, [
                'model' => 'required',
                'manufacturer' => 'required',
                'year' => 'required',
                'color' => 'required',
                'license_plate' => 'required|unique:cars',
                'user_id' => 'required|exists:users,id',
            ]
        );

        $data = $request->only(['model', 'manufacturer', 'year', 'color', 'license_plate', 'user_id']);

        return response()->json($this->service->execute($data));
    }
}
