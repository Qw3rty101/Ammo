<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            'Coffee', 'Milky', 'Smoothie', 'Tea', 'Juice', 
            'Salad', 'Burger', 'Pizza', 'Pasta', 'Noodles', 
            'Sandwich', 'Fries', 'Cake', 'Ice Cream', 'Donuts', 
            'Pastries', 'Breakfast', 'Snack', 'Appetizer', 'Main Course'
        ];

        foreach ($categories as $categoryName) {
            Category::create([
                'category_name' => $categoryName,
            ]);
        }
    }
}
