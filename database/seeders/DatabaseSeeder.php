<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        // USERS
        DB::table('users')->insert([
            [
                'name' => 'Donn Torres',
                'email' => 'donn@example.com',
                'password' => Hash::make('password'),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Test User',
                'email' => 'test@example.com',
                'password' => Hash::make('password'),
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ]);

        // CUSTOMERS
        DB::table('customer')->insert([
            [
                'user_id' => 1,
                'lname' => 'Torres',
                'fname' => 'Donn',
                'addressline' => 'Manila City',
                'zipcode' => '1000',
                'phone' => '09123456789',
                'image_path' => null,
            ],
            [
                'user_id' => 2,
                'lname' => 'User',
                'fname' => 'Test',
                'addressline' => 'Quezon City',
                'zipcode' => '1100',
                'phone' => '09987654321',
                'image_path' => null,
            ]
        ]);

        // ITEMS
        DB::table('item')->insert([
            [
                'description' => 'Laptop',
                'cost_price' => 30000,
                'sell_price' => 35000,
                'image' => null,
            ],
            [
                'description' => 'Mouse',
                'cost_price' => 200,
                'sell_price' => 350,
                'image' => null,
            ]
        ]);

        // STOCK
        DB::table('stock')->insert([
            [
                'item_id' => 1,
                'quantity' => 10,
            ],
            [
                'item_id' => 2,
                'quantity' => 50,
            ]
        ]);

        // ORDER INFO
        DB::table('orderinfo')->insert([
            [
                'customer_id' => 1,
                'date_placed' => now(),
                'date_shipped' => null,
                'shipping' => 100,
                'status' => 'pending',
            ]
        ]);

        // ORDER LINE
        DB::table('orderline')->insert([
            [
                'orderinfo_id' => 1,
                'item_id' => 1,
                'quantity' => 1,
            ],
            [
                'orderinfo_id' => 1,
                'item_id' => 2,
                'quantity' => 2,
            ]
        ]);
    }
}