<?php

namespace App\Entities;

use CodeIgniter\Entity\Entity;

class Role extends Entity
{
    // Fields    
    protected $attributes = [
        'id' => null,
        'name' => null,
        'created_at' => null,
        'updated_at' => null,
    ];

    protected $dates = ['created_at', 'updated_at', 'deleted_at'];
}