<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Company;

class CompanySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Company::create(['name' => '株式会社スザン', 'address' => '兵庫県b市c区1-2-3']);
        Company::create(['name' => '株式会社スレスタ', 'address' => '長野県e市f区3-2-1']);
    }
}