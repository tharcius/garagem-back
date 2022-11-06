<?php

namespace App\Services\User;

class CreateService extends Service
{
    public function execute(array $data)
    {
        if ($user = $this->users->create($data)) {
            return $user;
        }
        return 'Failure during registration';
    }
}
