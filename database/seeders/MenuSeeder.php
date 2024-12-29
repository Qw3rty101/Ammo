<?php
// database/seeders/MenuSeeder.php
namespace Database\Seeders;

use App\Models\Menu;
use App\Models\Category;
use Illuminate\Database\Seeder;

class MenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Definisikan data menu per kategori dan tipe
        $menuData = [
            'Drink' => [
                'Coffee' => ['V60', 'Americano', 'Latte', 'Cappuccino', 'Espresso', 'Mocha', 'Macchiato', 'Cold Brew', 'Flat White', 'Affogato'],
                'Milky' => ['Strawberry Milky', 'Chocolate Milky', 'Matcha Milky', 'Vanilla Milky', 'Banana Milky', 'Coconut Milky', 'Mango Milky', 'Avocado Milky', 'Oreo Milky', 'Caramel Milky'],
                'Smoothie' => ['Mango Smoothie', 'Strawberry Smoothie', 'Blueberry Smoothie', 'Banana Smoothie', 'Green Smoothie', 'Tropical Smoothie', 'Pineapple Smoothie', 'Coconut Smoothie', 'Watermelon Smoothie', 'Peach Smoothie'],
            ],
            'Food' => [
                'Pizza' => ['Margherita', 'Pepperoni', 'Hawaiian', 'Veggie', 'BBQ Chicken', 'Seafood', 'Meat Lover\'s', 'Four Cheese', 'Supreme', 'Mushroom'],
                'Pasta' => ['Spaghetti Carbonara', 'Penne Arrabbiata', 'Lasagna', 'Fettuccine Alfredo', 'Penne Bolognese', 'Mac and Cheese', 'Pesto Pasta', 'Ravioli', 'Seafood Pasta', 'Pasta Primavera'],
                'Burger' => ['Cheeseburger', 'Chicken Burger', 'Veggie Burger', 'Bacon Burger', 'BBQ Burger', 'Mushroom Burger', 'Fish Burger', 'Double Cheeseburger', 'Chicken Caesar Burger', 'Spicy Burger'],
            ]
        ];

        // Untuk setiap tipe menu (Drink, Food), kita ambil kategori dari database
        foreach ($menuData as $type => $categories) {
            foreach ($categories as $categoryName => $menus) {
                // Ambil kategori dari database berdasarkan nama
                $category = Category::firstOrCreate(['category_name' => $categoryName]);

                // Tambahkan menu untuk kategori ini
                foreach ($menus as $menuName) {
                    Menu::create([
                        'menu_name' => $menuName,
                        'category_id' => $category->id,
                        'price' => rand(10000, 50000), // Harga acak antara 10k dan 50k
                        'type' => $type,
                    ]);
                }
            }
        }
    }
}

