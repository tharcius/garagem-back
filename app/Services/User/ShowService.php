<?php

namespace App\Services\User;

class ShowService extends Service
{
    public function execute($id)
    {

        try {
            return $this->users->with('cars')->find($id);
        } catch (Exception $e) {
            return 'Register not found';
        }
    }
}
