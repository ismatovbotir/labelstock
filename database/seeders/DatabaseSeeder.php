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
use App\Models\Producer;
use App\Models\LabelType;
use App\Models\LabelColor;

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
            [
                ['name'=>'Rectangle'],
                ['name'=>'Circle'],
                ['name'=>'Oval'],
                ['name'=>'Jewelerry 1'],
                ['name'=>'Jewelerry 2'],
            ]    
                
        );
        Company::insert(
            [
                ['id'=>Str::uuid(),'name'=>'BDB Commerce','mob'=>'+998901754001','logo'=>'']
            ]
            );
        Adhesive::insert(
            [
                ['name'=>'Hot Melt'],
                ['name'=>'Acrylic'],
                ['name'=>'Removable']
            ]
        );
        LinerType::insert(
            [
                ['name'=>'Paper'],
                ['name'=>'Film']
            ]
        );
        LinerColor::insert(
            [
                ['name'=>'Yellow'],
                ['name'=>'White'],
                ['name'=>'Blue'],
                ['name'=>'Transparent']
            ]
        );
        Producer::insert(
            [
                ['name'=>'UPM','country'=>'Germany','web'=>'https://upm.com','logo'=>'upm.jpg'],
                ['name'=>'Frimpex','country'=>'Turkey','web'=>'https://Frimpex.com','logo'=>'frimpex.jpg'],
                ['name'=>'Jinda','country'=>'China','web'=>'https://jinda.com','logo'=>'jinda.jpg']
            ]
            
        );
        LabelType::insert(
            [
                ['name'=>'Cast Gloss Papar','description'=>'Cast gloss paper materials have an extra coating applied to give it an extra glossy, mirror like finish. The glossy finish provides a nice smooth surface for the ink to adhere to giving a premium look to the label. The extra coating applied also provides the label with additional tear and moisture resistance. Cast gloss materials are a good choice for a premium look in beverage or retail applications.'],
                ['name'=>'Machine Coat Paper','description'=>'Machine coat paper materials have a machine applied finish to the paper (hence the name) that while glossy does not have the same mirror like finish of cast gloss paper. This paper is suitable for a wide range of applications where the extra quality and moisture resistance of the cast gloss is not required. The addition of a gloss varnish or film laminate will give the finished label a similar finish to a cast gloss label. Machine coat materials are a good choice for general-purpose labels across multiple sectors.'],
                ['name'=>'Uncoated Paper','description'=>'Uncoated materials are paper based materials where the finish of the paper is left textured during the manufacturing process. They are not smoothed off to create a gloss finish like machine coat or cast gloss papers. Different textured patterns can be incorporated into the paper giving varying looks and feels. The uncoated stocks give labels a premium vintage look and provide a tactile experience on the finished product. Uncoated materials are common in the wine and premium drink categories. We have a wide range of options including Pelorus and Birrabeen, our premium cream and white uncoated papers, and Clarence, our textured paper.'],
                ['name'=>'Synthetic Materials','decsription'=>'Synthetic label materials can be PP, PE, PO or PVC based white or clear film materials. They provide excellent moisture and chemical resistance. The finishes are commonly glossy and provide an excellent surface for the ink to adhere to giving bright and dense colours. The matt finished materials are generally used in the logistics sector where the matt surface is better suited to thermal transfer printing. Synthetic materials are commonly used across multiple industries where moisture and chemical resistance is required. The conformability of synthetic materials makes them an excellent choice for small diameter containers and squeezable applications.']
            ]


        );

        LabelColor::insert(
            [
                ['name'=>'White'],
                ['name'=>'Silver'],
                ['name'=>'Transparent']
            ]
        );



    }
}
