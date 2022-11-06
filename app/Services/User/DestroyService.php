<?php

namespace App\Services\User;

class DestroyService extends Service
{
    public function execute(int $id)
    {
        try {
            $user = $this->users->with('cars')->find($id);
            $user->delete();
        } catch (Exception $e) {
            return 'Register not found';
        }

        // excluding relation with cars
        $user->cars->each(fn($car) => ($car->update(['user_id' => ''])));
        $user['deleted'] = true;

        return $user;
    }
}
