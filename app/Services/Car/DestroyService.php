<?php

namespace App\Services\Car;

class DestroyService extends Service
{
    public function execute(int $id)
    {
        try {
            $car = $this->cars->find($id);
            $car->update(['user_id' => '']);
            $car->delete();
        } catch (Exception $e) {
            return 'Register not found';
        }

        $car['deleted'] = true;

        return $car;
    }
}
