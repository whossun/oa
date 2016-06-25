<?php

use Illuminate\Database\Seeder;
use App\Models\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $user = [
            'username' => 'admin',
            'realname' => '管理员',
            'password' => 'admin',
            'sex' => '男',
            'status' => 1,
        ];
        User::create($user);
    }
}
