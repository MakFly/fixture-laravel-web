<?php

namespace Database\Seeders;

use App\Models\Item;
use Illuminate\Database\Seeder;

class ItemSeeder extends Seeder
{
    public function run(): void
    {
        if (Item::count() === 0) {
            Item::create(['name' => 'alpha']);
            Item::create(['name' => 'beta']);
        }
    }
}
