<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $admin_password = Hash::make('admin@2024');

        $usersRecords = [
            
            [
                
                'name'=> 'Admin',
                'email'=> 'admin@email.com',
                'password'=> $admin_password,
                'role'=> 'admin',
                'balance'=> 100000,
            
            ],

            [
                
                'name'=> 'Berlin',
                'email'=> 'berlin@email.com',
                'password'=>  Hash::make('berlin@2024'),
                'role'=> 'client',
                'balance'=> 100000,
            
            ],

            [
                
                'name'=> 'Roi',
                'email'=> 'roi@email.com',
                'password'=>  Hash::make('roi@2024'),
                'role'=> 'client',
                'balance'=> 100000,
            
            ],

            [
                
                'name'=> 'Cameron',
                'email'=> 'cameron@email.com',
                'password'=>  Hash::make('cameron@2024'),
                'role'=> 'client',
                'balance'=> 100000,
            
            ],

            [
                
                'name'=> 'Bruce',
                'email'=> 'bruce@email.com',
                'password'=>  Hash::make('bruce@2024'),
                'role'=> 'client',
                'balance'=> 100000,
            
            ],

            [
                
                'name'=> 'Keila',
                'email'=> 'keila@email.com',
                'password'=>  Hash::make('keila@2024'),
                'role'=> 'client',
                'balance'=> 100000,
            
            ],

            [
                
                'name'=> 'Damian',
                'email'=> 'damian@email.com',
                'password'=>  Hash::make('damian@2024'),
                'role'=> 'client',
                'balance'=> 100000,
            
            ],

            

           
        ];

        User::insert($usersRecords);
    }
}
