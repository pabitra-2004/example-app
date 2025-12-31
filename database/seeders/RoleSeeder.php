<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $roles = [
            'Chief Executive Officer (CEO)',
            'Chief Financial Officer (CFO)',
            'Chief Operating Officer (COO)',
            'Chief Marketing Officer (CMO)',
            'Chief Technology Officer (CTO)',
            'Human Resources Manager',
            'Sales Director',
            'Product Manager',
            'Customer Support Lead',
            'General Counsel (GC)',
            'R&D Scientist',
            'IT Systems Administrator',
            'QA Tester',
            'Supply Chain Manager',
            'Data Analyst',
            'Project Manager',
            'Compliance Officer',
        ];
        
        //* Method 1
        $__roles = array_map(fn ($role) => [
            'name' => $role,
            'created_at' => now(),
            'updated_at' => now(),
        ], $roles);

        Role::insert($__roles);


        //* Method 2
        // foreach($roles as $role){
        //     $_role = new Role();
        //     $_role->name = $role;
        //     $_role->save();
        // }
    }
}
