<?php

namespace App\Services\User;

use Illuminate\Http\Request;

class UpdateService extends Service
{

    public function execute(int $id, Request $request)
    {
        $data = $request->only(['name', 'email', 'password']);
        try {
            return $this->users->update($data, $id);
        } catch (Exception $e) {
            return 'Error on update register';
        }
    }
}
