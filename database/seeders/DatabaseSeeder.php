<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Role;
use App\Models\CoreType;
use App\Models\CoreSize;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        Role::insert(
            [
                ['name'=>'Admin'],
                ['name'=>'Owner'],
                ['name'=>'User'],
                ['name'=>'Client']
            ]

        );
        CoreType::insert(
            [
                ['name'=>'Paper'],
                ['name'=>'Plactic']
            ]
        );
        CoreSize::insert(
            [
                ['name'=>'10 mm'],
                ['name'=>'26 mm'],
                ['name'=>'40 mm'],
                ['name'=>'76 mm']
            ]
        );

    }
}
