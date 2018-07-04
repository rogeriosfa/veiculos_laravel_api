<?php

use Illuminate\Database\Seeder;

class VeiculosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\Veiculos::class, 10)->create();
    }
}
