<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Role;
class UserTableSeeder extends Seeder
{
  public function run()
  {
    $role_employee = Role::where('name', 'user')->first();
    $role_manager  = Role::where('name', 'administrator')->first();
    $employee = new User();
    $employee->name = 'Employee Name';
    $employee->email = 'user@example.com';
    $employee->password = bcrypt('123456B');
    $employee->save();
    $employee->roles()->attach($role_employee);
    $manager = new User();
    $manager->name = 'Manager Name';
    $manager->email = 'admin@example.com';
    $manager->password = bcrypt('123456A');
    $manager->save();
    $manager->roles()->attach($role_manager);
  }
}
