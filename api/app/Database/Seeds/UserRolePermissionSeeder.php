<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class UserRolePermissionSeeder extends Seeder
{
    public function run()
    {
        // columns array
        $usersColumns = ['id','username','password','email','created_at','updated_at'];
        $rolesColumns = ['id','role_name','created_at','updated_at'];
        $usersRolesColumns = ['id','user_id','role_id'];
        $permissionsColumns = ['id','permission_name','role_id',,'created_at','updated_at'];
    }
}
