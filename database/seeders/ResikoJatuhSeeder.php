<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\ResikoJatuh;

class ResikoJatuhSeeder extends Seeder
{
    public function run(): void
    {
        // Generate 10 data random
        ResikoJatuh::factory(100)->create();
    }
}
