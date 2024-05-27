<?php

namespace Database\Seeders;

use App\Models\Location;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LocationTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $locationRecords = [
            [
                'name'=>'Kariakoo',
                'latitude'=>'-6.81966111',	
                'longitude'=>'39.27504444',  
            ],

            [
                'name'=>'Buguruni',
                'latitude'=>'-6.83888889',	
                'longitude'=>'39.24365000',  
            ],

            [
                'name'=>'Tazara',
                'latitude'=>'-6.85519722',	
                'longitude'=>'39.24245278',  
            ],

            [
                'name'=>'Vingunguti',
                'latitude'=>'-6.84550278',	
                'longitude'=>'39.22509722',  
            ],

            [
                'name'=>'Ubungo',
                'latitude'=>'-6.79251944',	
                'longitude'=>'39.20867500',  
            ],

            [
                'name'=>'Mbagala',
                'latitude'=>'-6.89988611',	
                'longitude'=>'39.26602778',  
            ],

            [
                'name'=>'Mbezi',
                'latitude'=>'-6.74148333',	
                'longitude'=>'39.08811944',  
            ],

            [
                'name'=>'Kigamboni',
                'latitude'=>'-6.82266389',	
                'longitude'=>'39.30244722',  
            ],

            [
                'name'=>'Chanika',
                'latitude'=>'-7.00381667',	
                'longitude'=>'39.08116111',  
            ],

            [
                'name'=>'Kinondoni',
                'latitude'=>'-6.70533333',	
                'longitude'=>'39.11273611',  
            ],

        ];

        Location::insert($locationRecords);
    }
}
