<?php

use Illuminate\Database\Seeder;
use App\Permission;

class PermissionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $permissions=[
               [
                   'name' => 'role-read',
                   'display_name' => 'Display Role Listing',
                   'description' => 'See only Listing Of Role'
               ],
               [
                   'name' => 'role-create',
                   'display_name' => 'Create Role',
                   'description' => 'Create New Role'
               ],
               [
                   'name' => 'role-edit',
                   'display_name' => 'Edit Role',
                   'description' => 'Edit Role'
               ],
               [
                   'name' => 'role-delete',
                   'display_name' => 'Delete Role',
                   'description' => 'Delete Role'
               ],
               [
                   'name' => 'content-list',
                   'display_name' => 'Display Content Listing',
                   'description' => 'See only Listing Of Content'
               ],
               [
                   'name' => 'content-create',
                   'display_name' => 'Create Content',
                   'description' => 'Create New Content'
               ],
               [
                   'name' => 'content-edit',
                   'display_name' => 'Edit Content',
                   'description' => 'Edit Content'
               ],
               [
                   'name' => 'content-delete',
                   'display_name' => 'Delete Content',
                   'description' => 'Delete Content'
               ]

       ];

       foreach ($permissions as $key=>$value){
        Permission::create($value);
       }
    }
}
