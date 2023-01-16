<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    protected $table = 'users';
    protected $primaryKey = 'id';
    protected $useAutoIncrement = true;
    protected $insertID = 0;
    protected $returnType = \App\Entities\User::class;
    protected $useSoftDeletes = false;
    protected $protectFields = true;
    protected $allowedFields = [
        "first_name",
        "last_name",
        "email",
        "role_id",
        "password",
    ];

    // Dates
    protected $useTimestamps = false;
    protected $dateFormat = 'datetime';
    protected $createdField = 'created_at';
    protected $updatedField = 'updated_at';
    protected $deletedField = 'deleted_at';

    // Validation
    protected $validationRules = [];
    protected $validationMessages = [];
    protected $skipValidation = false;
    protected $cleanValidationRules = true;

    // Callbacks
    protected $allowCallbacks = true;
    protected $beforeInsert = [];
    protected $afterInsert = [];
    protected $beforeUpdate = [];
    protected $afterUpdate = [];
    protected $beforeFind = [];
    protected $afterFind = [
        "resolve_relations"
    ];
    protected $beforeDelete = [];
    protected $afterDelete = [];


    protected function resolve_relations(array $results)
    {

        if (isset($results['data'])) {
            if (count($results['data'])) {
                foreach ($results['data'] as $key => $value) {
                    $roleModel = new RoleModel();
                    $results['data'][$key]->role = $roleModel->find($value->role_id);
                }
            }
        }
        return $results;
    }


}