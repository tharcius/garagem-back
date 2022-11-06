<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Services\User\CreateService;
use Illuminate\Http\Request;

class CreateController extends Controller
{

    public function __construct(private CreateService $service)
    {
    }

    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function execute(Request $request)
    {
        $this->validate(
            $request, [
                'name' => 'required',
                'email' => 'required|email|unique:users',
            ]
        );

        $data = $request->only(['name', 'email']);

        return response()->json($this->service->execute($data));
    }
}
