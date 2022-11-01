<?php

namespace Database\Seeders;

use App\Models\Diverso;
use Illuminate\Database\Seeder;

class DiversoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Diverso::factory(5)->create();
    }
}
