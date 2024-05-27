<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $category_records = [
            [
                'name'=>'Computer & Accessories'
            ],

            [
                'name'=>'Mobile Phones & Accessories'
            ],

            [
                'name'=>'Fashion'
            ],

            [
                'name'=>'Others'
            ]
        ];

        Category::insert($category_records);
    }
}
