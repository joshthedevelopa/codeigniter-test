<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class UserRoleSeeder extends Seeder
{
    public function run()
    {

        $roleModel = new \App\Models\RoleModel();
		$roleModel->insertBatch([
			[
				"name" => "Admin",
			],
			[
				"name" => "Citizen",
			]
		]);


        $userModel = new \App\Models\UserModel();
		$userModel->insertBatch([
			[
				"first_name" => "John",
				"last_name" => "Doe",
				"email" => "john@email.com",
				"role_id" => 1,
				"password" => password_hash("1234", PASSWORD_DEFAULT)
			],
			[
				"first_name" => "Bob",
				"last_name" => "Thomas",
				"email" => "bob@email.com",
				"role_id" => 2,
				"password" => password_hash("1234", PASSWORD_DEFAULT)
			]
		]);
    }
}
