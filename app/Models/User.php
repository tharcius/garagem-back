<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class User extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'name', 'email', 'password'
    ];

    protected $dates = [
        'deleted_at'
    ];

    protected $hidden = [
        'password',
    ];

    public function cars(): HasMany
    {
        return $this->hasMany(Car::class, 'user_id', 'id');
    }
}
