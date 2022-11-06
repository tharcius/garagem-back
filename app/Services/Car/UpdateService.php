<?php

namespace App\Services\Car;

use Illuminate\Http\Request;

class UpdateService extends Service
{

    public function execute(int $id, Request $request)
    {
        $data = $request->only(['model', 'manufacturer', 'year', 'color', 'license_plate']);
        try {
            return $this->cars->update($data, $id);
        } catch (Exception $e) {
            return 'Error on update register';
        }
    }
}
