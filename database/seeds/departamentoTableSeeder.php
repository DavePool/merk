<?php

use Illuminate\Database\Seeder;
use App\departamento;

class departamentoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(departamento::class,80)->create();
    }
}
