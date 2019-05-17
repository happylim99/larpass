<?php

use Illuminate\Database\Seeder;
use App\Model\ProductAttribute;

class ProductAttributeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ProductAttribute::create([
            'product_detail_id' => 1,
            'weight' => 11.11,
            'width' => 11.11,
            'length' => 11.11,
            'height' => 11.11,
        ]);
        ProductAttribute::create([
            'product_detail_id' => 2,
            'weight' => 22.22,
            'width' => 22.22,
            'length' => 22.22,
            'height' => 22.22,
        ]);
        ProductAttribute::create([
            'product_detail_id' => 3,
            'weight' => 33.33,
            'width' => 33.33,
            'length' => 33.33,
            'height' => 33.33,
        ]);
        ProductAttribute::create([
            'product_detail_id' => 4,
            'weight' => 44.44,
            'width' => 44.44,
            'length' => 44.44,
            'height' => 44.44,
        ]);
        ProductAttribute::create([
            'product_detail_id' => 5,
            'weight' => 55.55,
            'width' => 55.55,
            'length' => 55.55,
            'height' => 55.55,
        ]);
    }
}
