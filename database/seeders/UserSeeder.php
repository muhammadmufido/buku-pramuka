<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use function Laravel\Prompts\password;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = [
            'name'=> 'ADMIN',
            'email' => 'adminpramuka@gmail.com',
            'password' => bcrypt('ownernyaganteng')
        ];

        User::Insert($user);
    }
}
