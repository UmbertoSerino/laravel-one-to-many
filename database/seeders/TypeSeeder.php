<?php

namespace Database\Seeders;

use App\Models\Type;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $types = [

            'FrontEnd', 'BackEnd', 'Full Stack',
        ];

        foreach ($types as $typeName) {
            $newType = new Type();
            $newType->name = $typeName;
            $newType->save();
        }
    }
}
