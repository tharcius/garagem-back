<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Services\User\UpdateService;
use Illuminate\Http\Request;

class UpdateController extends Controller
{
    public function __construct(private UpdateService $service)
    {
    }

    public function execute(Request $request, int $id)
    {
        $data = $request;
        $this->validate(
            $data, [
                'email' => 'email'
            ]
        );
        return response()->json($this->service->execute($id, $data));
    }
}
