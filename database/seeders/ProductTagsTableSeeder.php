<?php

namespace Database\Seeders;

use App\Models\ProductTag;
use Illuminate\Database\Seeder;

class ProductTagsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tags = [
            ['name' => 'dev'],
            ['name' => 'test'],
            ['name' => 'stage'],
            ['name' => 'prod'],
        ];

        ProductTag::insert($tags);
    }
}
