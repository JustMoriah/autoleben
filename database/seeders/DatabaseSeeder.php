<?php

namespace Database\Seeders;

use App\Models\CarRent;
use App\Models\CarSell;
use App\Models\User;
use App\Models\UserAddress;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        CarRent::factory(36)->create();
        CarSell::factory(36)->create();
        User::factory(36)->create();
        UserAddress::factory(36)->create();
    }
}
