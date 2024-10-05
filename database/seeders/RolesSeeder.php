<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('roles')->insert(
            [
                [
                    'name' => 'admin',
                    'description' => ' ',
                ],
                [
                    'name' => 'attendant',
                    'description' => ' ',
                ],
                [
                    'name' => 'customer',
                    'description' => ' ',
                ]
            ]
        );

    }
}
