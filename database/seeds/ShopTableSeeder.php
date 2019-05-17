<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Model\Shop;
use App\Model\ShopStatus;
use App\Model\ShopChargeType;
use App\Model\Bank;
use Carbon\Carbon;

class ShopTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Shop::create([
            'owner_id' => User::all()->random()->id,
            'name' => 'Shop 1',
            'description' => 'Shop 1 description',
            'bank_id' => Bank::all()->random()->id,
            'bank_account_no' => 'Shop bank no 1',
            'shop_charge_type_id' => ShopChargeType::all()->random()->id,
            'charge_value' => 10,
            'rating' => 3.5,
            'status' => ShopStatus::all()->random()->id,
            'approved_by' => User::all()->random()->id,
            'approved_at' => Carbon::now(),
        ]);

        Shop::create([
            'owner_id' => User::all()->random()->id,
            'name' => 'Shop 2',
            'description' => 'Shop 2 description',
            'bank_id' => Bank::all()->random()->id,
            'bank_account_no' => 'Shop bank no 2',
            'shop_charge_type_id' => ShopChargeType::all()->random()->id,
            'charge_value' => 20,
            'rating' => 4,
            'status' => ShopStatus::all()->random()->id,
            'approved_by' => User::all()->random()->id,
            'approved_at' => Carbon::now(),
        ]);
    }
}
