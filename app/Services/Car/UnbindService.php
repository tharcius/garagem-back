<?php

namespace App\Services\Car;

class UnbindService extends Service
{

    public function execute(int $id)
    {
        try {
            $car = $this->cars->find($id);
            return $car->update(['user_id' => '']);

        } catch (Exception $e) {
            return 'Error on unbind user from a car';
        }
    }
}
