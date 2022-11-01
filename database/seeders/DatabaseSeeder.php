<?php

namespace Database\Seeders;

use App\Models\Cidade;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::factory(1)->create();
        \App\Models\Produto::factory(5)->create();
        \App\Models\Polts::factory(3)->create();
        \App\Models\Cidade::factory(10)->create();
    }
}
