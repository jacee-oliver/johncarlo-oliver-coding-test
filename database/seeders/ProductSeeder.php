<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $products = [
            'Laptop',
            'Desktop',
            'Server',
            'Keyboard',
            'Mouse',
            'Monitor',
            'Charger',
            'Accessories',
            'Laptop Bag',
            'Router',
        ];

        foreach ($products as $name) {
            Product::create([
                'name' => $name,
                'description' => Str::random(250),
                'price' => 100.00,
            ]);
        }
    }
}
