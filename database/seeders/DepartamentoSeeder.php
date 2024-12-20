<?php

namespace Database\Seeders;

use App\Models\Departamentos;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DepartamentoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Departamentos::create([
            "CodDepartamento"=>"C1",
            "Desdepartamento"=>"Por ahi",
          ]);

          Departamentos::create([
            "CodDepartamento"=>"C2",
            "Desdepartamento"=>"Por alla",
          ]);

          Departamentos::create([
            "CodDepartamento"=>"C3",
            "Desdepartamento"=>"Mas alla",
          ]);
    }
}
