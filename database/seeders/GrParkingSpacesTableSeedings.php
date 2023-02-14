<?php

namespace Database\Seeders;

use App\Models\GrParkingSpace;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GrParkingSpacesTableSeedings extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        GrParkingSpace::create([
            'es_street' => 'Carrer del Camp',
            'es_zone' => 'Sant Gervasi',
            'es_description' =>'Plaza de parking ubicada en el barrio del Eixample...',
            'photo_path' => 'upload/',
            'vahical_type' => 'car',
            'price' => 123,
            'user_id' =>1,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        GrParkingSpace::create([
            'es_street' => 'redas del Com',
            'es_zone' => 'Santed Gervasin',
            'es_description' =>'Plaza de parking ubicada en el barrio del Eixample...',
            'photo_path' => 'upload/',
            'vahical_type' => 'car',
            'price' => 123,
            'user_id' =>1,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        GrParkingSpace::create([
            'es_street' => 'Dragira del Kamps',
            'es_zone' => 'Sanatasdf Gervasisf',
            'es_description' =>'Plaza de parking ubicada en el barrio del Eixample...',
            'photo_path' => 'upload/',
            'vahical_type' => 'bike',
            'price' => 123,
            'user_id' =>1,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
