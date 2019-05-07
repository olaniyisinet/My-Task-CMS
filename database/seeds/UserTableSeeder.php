
<?php

use App\Role;
use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserTableSeeder extends Seeder
{

    public function run()
    {
        $role_student = Role::where('name', 'student')->first();
        $role_employee = Role::where('name', 'employee')->first();
        $role_employer = Role::where('name', 'employer')->first();
        $role_admin = Role::where('name', 'admin')->first();

        $student = new User();
        $student->name = 'Olaniyi Student';
        $student->email = 'olaniyistudent@mytest.com';
        $student->password = Hash::make('olaniyistudent');
        $student->save();
        $student->roles()->attach($role_student);
        
        $employee = new User();
        $employee->name = 'Olaniyi Employee';
        $employee->email = 'olaniyiemployee@mytest.com';
        $employee->password = Hash::make('olaniyiemployee');
        $employee->save();
        $employee->roles()->attach($role_employee);
        
        $employer = new User();
        $employer->name = 'Olaniyi Employer';
        $employer->email = 'olaniyiemployer@mytest.com';
        $employer->password = Hash::make('olaniyiemployer');
        $employer->save();
        $employer->roles()->attach($role_employer);

        $admin = new User();
        $admin->name = 'Olaniyi Admin';
        $admin->email = 'olaniyiadmin@mytest.com';
        $admin->password = Hash::make('olaniyiadmin');
        $admin->save();
        $admin->roles()->attach($role_admin);
    }
}