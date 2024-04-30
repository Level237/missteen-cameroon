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
            'category_title'=>'Miss Teen Cameroon'
        ]);
        Category::create([
            'category_title'=>'Mister Teen Cameroon'
        ]);
        Category::create([
            'category_title'=>'Miss Teen Petite Cameroon'
        ]);
        Category::create([
            'category_title'=>'Miss Teen Curve Cameroon'
        ]);
        Category::create([
            'category_title'=>'Miss Pre-Teen Cameroon'
        ]);
    }
}
