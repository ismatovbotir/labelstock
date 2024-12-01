<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Role;
use App\Models\CoreType;
use App\Models\CoreSize;
use App\Models\Shape;
use App\Models\Company;
use App\Models\Adhesive;
use App\Models\LinerType;
use App\Models\LinerColor;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;


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
                ['name'=>'Plastic']
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
        Shape::insert(
                ['name'=>'Rectangle'],
                ['name'=>'Circle'],
                ['name'=>'Oval'],
                ['name'=>'Jewelerry 1'],
                ['name'=>'Jewelerry 2'],
                
                
        );
        Company::insert(

            ['id'=>Str::uuid(),'name'=>'BDB Commerce','mob'=>'+998901754001','logo'=>'']
        );
        Adhesive::insert(
            ['name'=>'Hot Melt'],
            ['name'=>'Acrylic'],
            ['name'=>'Removable']
        );
        LinerType::insert(
            ['name'=>'Paper'],
            ['name'=>'Film']
        );
        LinerColor::insert(
            ['name'=>'Yellow'],
            ['name'=>'White'],
            ['name'=>'Blue'],
            ['name'=>'Transparent']
        );



    }
}
