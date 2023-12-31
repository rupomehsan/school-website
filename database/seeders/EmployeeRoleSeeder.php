<?php

namespace Database\Seeders;

use App\Models\Employee\Employee;
use App\Models\Employee\EmployeeRole;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EmployeeRoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        EmployeeRole::truncate();
        EmployeeRole::create([
            "title" => "প্রতিষ্ঠাতা",
            "serial" => 1
        ]);
        EmployeeRole::create([
            "title" => "অধ্যক্ষ",
            "serial" => 2
        ]);
        EmployeeRole::create([
            "title" => "উপাধ্যক্ষ",
            "serial" => 3
        ]);
        EmployeeRole::create([
            "title" => "শিক্ষক",
            "serial" => 4
        ]);
        EmployeeRole::create([
            "title" => "অফিস",
            "serial" => 5
        ]);
        EmployeeRole::create([
            "title" => "কর্মচারী",
            "serial" => 6
        ]);
    }
}
