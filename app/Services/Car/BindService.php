<?php

namespace App\Services\Car;

use Illuminate\Http\Request;

class BindService extends Service
{

    public function execute(Request $request)
    {
        try {
            $car = $this->cars->find($request->car_id);
            $car->update(['user_id' => $request->user_id]);
        } catch (Exception $e) {
            return 'Error on bind user to a car';
        }

        return $car;
    }
}
