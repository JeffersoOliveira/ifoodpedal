<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert(
            [
                [
                    'role_id'=>'1',
                    'name'=>'Admin',
                    'email'=>'admin@teste.com',
                    'phone'=>'(51)00000-4607',
                    'cpf'=>'00000000000',
                    'password'=> Hash::make('password'),
                ],
                [
                    'role_id'=>'2',
                    'name'=>'Atendente',
                    'email'=>'Atendente@teste.com',
                    'phone'=>'(51)00000-4607',
                    'cpf'=>'00000000001',
                    'password'=> Hash::make('password'),
                ],
                [
                    'role_id'=>'3',
                    'name'=>'cliente',
                    'email'=>'cliente@teste.com',
                    'phone'=>'(51)00000-4607',
                    'cpf'=>'00000000002',
                    'password'=> Hash::make('password'),
                ]
            ]
        );
    }
}
