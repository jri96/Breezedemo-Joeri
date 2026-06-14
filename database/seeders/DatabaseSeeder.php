<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $users = [
            ['name' => 'Praktijkmanagement', 'email' => 'praktijkmanagement@smilepro.nl', 'rolename' => 'praktijkmanagement'],
            ['name' => 'Tandarts',           'email' => 'tandarts@smilepro.nl',           'rolename' => 'tandarts'],
            ['name' => 'Mondhygienist',      'email' => 'mondhygienist@smilepro.nl',      'rolename' => 'mondhygienist'],
            ['name' => 'Assistent',          'email' => 'assistent@smilepro.nl',          'rolename' => 'assistent'],
            ['name' => 'Patient',            'email' => 'patient@smilepro.nl',            'rolename' => 'patient'],
        ];

        foreach ($users as $user) {
            User::create([
                'name' => $user['name'],
                'email' => $user['email'],
                'rolename' => $user['rolename'],
                'password' => Hash::make('password'),
            ]);
        }
    }
}
