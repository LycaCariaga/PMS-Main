<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            // 'name' => 'Lyca Cariaga',
            'firstName' => 'Lyca',
            'lastName' => 'Cariaga',
            'email' => 'lycacariaga@gmail.com',
            'username' => 'lycacariaga',
            'company' => 'Aventus',
            'Role' => 'Admin',
            'password' =>bcrypt('lgc99')
        ]);
    }
}
