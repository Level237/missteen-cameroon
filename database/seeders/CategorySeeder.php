<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Category::create([
            'category_title'=>'Miss Teen'
        ]);
        Category::create([
            'category_title'=>'Mister Teen'
        ]);
        Category::create([
            'category_title'=>'Miss Teen Petite'
        ]);
        Category::create([
            'category_title'=>'Miss Teen Curve'
        ]);
        Category::create([
            'category_title'=>'Miss Pre-Teen'
        ]);
        Category::create([
            'category_title'=>'Mister Teen'
        ]);
    }
}
