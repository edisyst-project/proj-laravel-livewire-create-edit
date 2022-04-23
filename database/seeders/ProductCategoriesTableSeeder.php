<?php

namespace Database\Seeders;

use App\Models\ProductCategory;
use Illuminate\Database\Seeder;

class ProductCategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = [
            'Animals',
            'Food',
            'Games',
            'Sport',
            'Shoes',
            'Tech',
        ];

        foreach ($categories as $category) {
            ProductCategory::factory()->create([
                'name' => $category
            ]);
        }
    }
}
