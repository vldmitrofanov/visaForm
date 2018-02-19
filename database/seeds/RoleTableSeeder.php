<?php

use Illuminate\Database\Seeder;
use App\Role;

class RoleTableSeeder extends Seeder
{
  public function run()
  {
    $role_customer = new Role();
    $role_customer->name = 'Customer';
    $role_customer->description = 'Customer';
    $role_customer->save();
    
    $role_agent = new Role();
    $role_agent->name = 'Agent';
    $role_agent->description = 'Agent';
    $role_agent->save();
    
    $role_employee = new Role();
    $role_employee->name = 'user';
    $role_employee->description = 'A Employee User';
    $role_employee->save();
    
    $role_manager = new Role();
    $role_manager->name = 'administrator';
    $role_manager->description = 'A Manager User';
    $role_manager->save();
  }
}
