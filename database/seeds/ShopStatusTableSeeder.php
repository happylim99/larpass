<?php

use Illuminate\Database\Seeder;
use App\Model\ShopStatus;

class ShopStatusTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ShopStatus::create([
            'name' => 'Operating',
            'description' => 'status 1 description',
            'isActive' => '1',
        ]);

        ShopStatus::create([
            'name' => 'Pending',
            'description' => 'Status 2 description',
            'isActive' => '1',
        ]);

        ShopStatus::create([
            'name' => 'suspended',
            'description' => 'Status 2 description',
            'isActive' => '1',
        ]);

        ShopStatus::create([
            'name' => 'closed',
            'description' => 'Status 2 description',
            'isActive' => '1',
        ]);
    }
}
