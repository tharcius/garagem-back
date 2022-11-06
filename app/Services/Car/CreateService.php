<?php

namespace App\Services\Car;

class CreateService extends Service
{
    public function execute(array $data)
    {
        if ($user = $this->cars->create($data)) {
            return $user;
        }
        return 'Failure during registration';
    }
}
