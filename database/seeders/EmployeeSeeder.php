<?php

namespace Database\Seeders;

use App\Models\Employee;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EmployeeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Employee::create([
            'name' => 'اسلام',
            'phone' => '01012345678',
 
        ]);
    
        Employee::create([
            'name' => 'خلاف',
            'phone' => '01098765432',
     
        ]);
    }
}
