<?php

namespace Database\Seeders;

use App\Models\Company;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CompanySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Company::factory(10)->create();
    }

     // Company::factory(10)->create() soit Company::factory->count(10)->create();
     // php artisan db:seed --class=Databaseseeder
}
