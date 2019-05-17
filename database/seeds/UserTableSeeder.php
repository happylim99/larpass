<?php

use Illuminate\Database\Seeder;
//use Illuminate\Database\Eloquent\Model;
use App\User;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'happy',
            'email' => 'happy@test.com',
            'email_verified_at' => now(),
            'password' => Hash::make('abcd1234'), // password
            'remember_token' => Str::random(10),
        ]);

        User::create([
            'name' => 'smile',
            'email' => 'smile@test.com',
            'email_verified_at' => now(),
            'password' => Hash::make('abcd1234'), // password
            'remember_token' => Str::random(10),
        ]);

        User::create([
            'name' => 'haha',
            'email' => 'haha@test.com',
            'email_verified_at' => now(),
            'password' => Hash::make('abcd1234'), // password
            'remember_token' => Str::random(10),
        ]);
    }
}
