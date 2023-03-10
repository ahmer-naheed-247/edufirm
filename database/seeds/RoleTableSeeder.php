<?php

use Illuminate\Database\Seeder;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('roles')->insert([

            [
                'name' => 'super-admin',
                'display_name' => 'Super Admin',
                'description' => 'Super Admin',
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now(),
            ],
            [
                'name' => 'admin',
                'display_name' => 'Administrator',
                'description' => 'Administrator',
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now(),
            ],
            [
                'name' => 'account',
                'display_name' => 'Accountant',
                'description' => 'Accountant',
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now(),
            ],
            [
                'name' => 'library',
                'display_name' => 'Librarian',
                'description' => 'Librarian',
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now(),
            ],
            [
                'name' => 'staff',
                'display_name' => 'Staff/Teacher',
                'description' => 'Staff',
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now(),
            ],
            [
                'name' => 'student',
                'display_name' => 'Student',
                'description' => 'Student',
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now(),
            ],
            [
                'name' => 'guardian',
                'display_name' => 'Guardian',
                'description' => 'Guardian',
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now(),
            ],
            [
                'name' => 'web-admin',
                'display_name' => 'Web Admin',
                'description' => 'Web Admin',
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now(),
            ],
        ]);
    }
}
