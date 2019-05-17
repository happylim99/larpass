<?php

use Illuminate\Database\Seeder;
//use Illuminate\Database\Eloquent\Model;
use App\Model\ProductMaster;

class ProductMasterTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ProductMaster::create([
            'name' => 'ProductMaster1',
            'description' => 'ProductMasterDescription1',
        ]);

        ProductMaster::create([
            'name' => 'ProductMaster2',
            'description' => 'ProductMasterDescription2',
        ]);

        ProductMaster::create([
            'name' => 'ProductMaster3',
            'description' => 'ProductMasterDescription3',
        ]);

        ProductMaster::create([
            'name' => 'ProductMaster4',
            'description' => 'ProductMasterDescription4',
        ]);

        ProductMaster::create([
            'name' => 'ProductMaster5',
            'description' => 'ProductMasterDescription5',
        ]);
    }
}
