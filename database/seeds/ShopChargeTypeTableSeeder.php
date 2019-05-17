<?php

use Illuminate\Database\Seeder;
use App\Model\ShopChargeType;

class ShopChargeTypeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ShopChargeType::create([
            'name' => 'ShopChargeType name 1',
            'description' => 'ShopChargeType description 1',
            'code' => 'ShopChargeType code 1',
            'status' => '1',
        ]);

        ShopChargeType::create([
            'name' => 'ShopChargeType name 2',
            'description' => 'ShopChargeType description 2',
            'code' => 'ShopChargeType code 2',
            'status' => '2',
        ]);

        ShopChargeType::create([
            'name' => 'ShopChargeType name 3',
            'description' => 'ShopChargeType description 3',
            'code' => 'ShopChargeType code 3',
            'status' => '3',
        ]);

        ShopChargeType::create([
            'name' => 'ShopChargeType name 4',
            'description' => 'ShopChargeType description 4',
            'code' => 'ShopChargeType code 4',
            'status' => '4',
        ]);

        ShopChargeType::create([
            'name' => 'ShopChargeType name 5',
            'description' => 'ShopChargeType description 5',
            'code' => 'ShopChargeType code 5',
            'status' => '5',
        ]);
    }
}
