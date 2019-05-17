<?php

use Illuminate\Database\Seeder;
use App\Model\Bank;

class BankTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Bank::create([
            'name' => 'Bank 1',
            'description' => 'Bank 1 description',
            'isActive' => '1',
        ]);

        Bank::create([
            'name' => 'Bank 2',
            'description' => 'Bank 2 description',
            'isActive' => '1',
        ]);

        Bank::create([
            'name' => 'Bank 3',
            'description' => 'Bank 3 description',
            'isActive' => '1',
        ]);

        Bank::create([
            'name' => 'Bank 4',
            'description' => 'Bank 4 description',
            'isActive' => '0',
        ]);
    }
}
