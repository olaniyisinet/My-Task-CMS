
<?php
use App\Role;
use Illuminate\Database\Seeder;

class RoleTableSeeder extends Seeder
{
    public function run()
    {
        $role_student = new Role();
        $role_student->name = 'student';
        $role_student->description = 'A student role';
        $role_student->save();
        
        $role_employee = new Role();
        $role_employee->name = 'employee';
        $role_employee->description = 'An employee role';
        $role_employee->save();

        $role_employee = new Role();
        $role_employee->name = 'employer';
        $role_employee->description = 'An employer role';
        $role_employee->save();

        $role_admin = new Role();
        $role_admin->name = 'admin';
        $role_admin->description = 'An admin user';
        $role_admin->save();
    }
}