<?php

use Illuminate\Database\Seeder;
use App\Model\ProductDetail;
use App\Model\ProductMaster;
use App\Model;
use App\User;

class ProductDetailTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /*
        'product_master_id' => function() {
            return ProductMaster::all()->random();
        },

        
        */
        
        ProductDetail::create([
            'product_master_id' => 1,
            'option_name_1' => 'color-size1',
            'option_value_1' => 'red-m1',
            'option_name_2' => 'material-height1',
            'option_value_2' => 'plastic-short1',
            'sku' => 'prodetail1',
            'stocks' => '10',
            'sold' => '1',
            'price' => '10',
            'remark' => 'trying remark here1',
            'available_from' => date("Y-m-d H:i:s"),
            'available_to' => date("Y-m-d H:i:s"),
            'created_by' => User::all()->random()->id,
            'approved_by' => User::all()->random()->id,
        ]);
        
        ProductDetail::create([
            'product_master_id' => 1,
            'option_name_1' => 'color-size2',
            'option_value_1' => 'red-m2',
            'option_name_2' => 'material-height2',
            'option_value_2' => 'plastic-short2',
            'sku' => 'prodetail2',
            'stocks' => '20',
            'sold' => '2',
            'price' => '20',
            'remark' => 'trying remark here2',
            'available_from' => date("Y-m-d H:i:s"),
            'available_to' => date("Y-m-d H:i:s"),
            'created_by' => User::all()->random()->id,
            'approved_by' => User::all()->random()->id,
        ]);

        ProductDetail::create([
            'product_master_id' => 1,
            'option_name_1' => 'color-size3',
            'option_value_1' => 'red-m3',
            'option_name_2' => 'material-height3',
            'option_value_2' => 'plastic-short3',
            'sku' => 'prodetail3',
            'stocks' => '5',
            'sold' => '4',
            'price' => '13',
            'remark' => 'trying remark here3',
            'available_from' => date("Y-m-d H:i:s"),
            'available_to' => date("Y-m-d H:i:s"),
            'created_by' => User::all()->random()->id,
            'approved_by' => User::all()->random()->id,
        ]);

        ProductDetail::create([
            'product_master_id' => 2,
            'option_name_1' => 'color-size4',
            'option_value_1' => 'red-m4',
            'option_name_2' => 'material-height4',
            'option_value_2' => 'plastic-short4',
            'sku' => 'prodetail4',
            'stocks' => '9',
            'sold' => '2',
            'price' => '9',
            'remark' => 'trying remark here4',
            'available_from' => date("Y-m-d H:i:s"),
            'available_to' => date("Y-m-d H:i:s"),
            'created_by' => User::all()->random()->id,
            'approved_by' => User::all()->random()->id,
        ]);

        ProductDetail::create([
            'product_master_id' => 2,
            'option_name_1' => 'color-size5',
            'option_value_1' => 'red-m5',
            'option_name_2' => 'material-height5',
            'option_value_2' => 'plastic-short5',
            'sku' => 'prodetail5',
            'stocks' => '2',
            'sold' => '2',
            'price' => '2',
            'remark' => 'trying remark here5',
            'available_from' => date("Y-m-d H:i:s"),
            'available_to' => date("Y-m-d H:i:s"),
            'created_by' => User::all()->random()->id,
            'approved_by' => User::all()->random()->id,
        ]);

        ProductDetail::create([
            'product_master_id' => 3,
            'option_name_1' => 'color-size6',
            'option_value_1' => 'red-m6',
            'option_name_2' => 'material-height6',
            'option_value_2' => 'plastic-short6',
            'sku' => 'prodetail6',
            'stocks' => '6',
            'sold' => '4',
            'price' => '6',
            'remark' => 'trying remark here6',
            'available_from' => date("Y-m-d H:i:s"),
            'available_to' => date("Y-m-d H:i:s"),
            'created_by' => User::all()->random()->id,
            'approved_by' => User::all()->random()->id,
        ]);

        ProductDetail::create([
            'product_master_id' => 3,
            'option_name_1' => 'color-size7',
            'option_value_1' => 'red-m7',
            'option_name_2' => 'material-height7',
            'option_value_2' => 'plastic-short7',
            'sku' => 'prodetail7',
            'stocks' => '7',
            'sold' => '3',
            'price' => '8',
            'remark' => 'trying remark here7',
            'available_from' => date("Y-m-d H:i:s"),
            'available_to' => date("Y-m-d H:i:s"),
            'created_by' => User::all()->random()->id,
            'approved_by' => User::all()->random()->id,
        ]);

        ProductDetail::create([
            'product_master_id' => 4,
            'option_name_1' => 'color-size9',
            'option_value_1' => 'red-m9',
            'option_name_2' => 'material-height9',
            'option_value_2' => 'plastic-short9',
            'sku' => 'prodetail9',
            'stocks' => '4',
            'sold' => '3',
            'price' => '6',
            'remark' => 'trying remark here9',
            'available_from' => date("Y-m-d H:i:s"),
            'available_to' => date("Y-m-d H:i:s"),
            'created_by' => User::all()->random()->id,
            'approved_by' => User::all()->random()->id,
        ]);

        ProductDetail::create([
            'product_master_id' => 5,
            'option_name_1' => 'color-size10',
            'option_value_1' => 'red-m10',
            'option_name_2' => 'material-height10',
            'option_value_2' => 'plastic-short10',
            'sku' => 'prodetail10',
            'stocks' => '12',
            'sold' => '7',
            'price' => '5',
            'remark' => 'trying remark here10',
            'available_from' => date("Y-m-d H:i:s"),
            'available_to' => date("Y-m-d H:i:s"),
            'created_by' => User::all()->random()->id,
            'approved_by' => User::all()->random()->id,
        ]);
    }
}
