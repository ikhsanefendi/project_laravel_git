<?php

use Illuminate\Database\Seeder;
use App\User;

class CreateUsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = [
            [
               'name'=>'Admin',
               'email'=>'admin@kly.com',
                'is_admin'=>'1',
               'password'=> bcrypt('admin12345'),
            ],
            [
               'name'=>'User',
               'email'=>'user@gmail.com',
                'is_admin'=>'0',
               'password'=> bcrypt('user'),
            ],
        ];
  
        foreach ($user as $key => $value) {
            User::create($value);
        }
    }
}
