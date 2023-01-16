<?php

namespace App\Entities;

use CodeIgniter\Entity\Entity;

class User extends Entity
{
    // Fields    
    protected $attributes = [
        'id' => null,
        'first_name' => null,
        'first_last' => null,
        'username' => null,
        'email' => null,
        'password' => null,
        'created_at' => null,
        'updated_at' => null,
    ];

    protected $dates = ['created_at', 'updated_at', 'deleted_at'];
}