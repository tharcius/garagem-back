<?php

namespace App\Http\Controllers\Car;

use App\Http\Controllers\Controller;
use App\Services\Car\UpdateService;
use Illuminate\Http\Request;

class UpdateController extends Controller
{
    public function __construct(private UpdateService $service)
    {
    }

    public function execute(Request $request, $id)
    {
        $data = $request;
        $this->validate(
            $data, [
                'license_plate' => 'unique:cars',
                'user_id' => 'exists:users,id',
            ]
        );
        return response()->json($this->service->execute($id, $data));
    }
}
