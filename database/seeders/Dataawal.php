<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class Dataawal extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = new User();
        $user->name = 'Admin';
        $user->email = 'admin@gmail.com';
        $user->password = bcrypt ('123456');
        $user->peran = 'admin';
        $user->save();

        $user = new User();
        $user->name = 'kasir';
        $user->email = 'kasir@gmail.com';
        $user->password = bcrypt('123456');
        $user->peran = 'kasir';
        $user->save();

        $user = new User();
        $user->name = 'supervisor';
        $user->email = 'supervisor@gmail.com';
        $user->password = bcrypt('123456');
        $user->peran = 'supervisor';
        $user->save();

        $user = new User();
        $user->name = 'manager';
        $user->email = 'manager@gmail.com';
        $user->password = bcrypt('123456');
        $user->peran = 'manager';
        $user->save();
    }
}
