<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //Rol de administrador
        User::create([
            'name'=>'admin', 
            'email'=>'admin@gmail.com',          
            'password'=>Hash::make('12345'),          

        ])->assignRole('admin');

        //Rol de vendedor
        User::create([
            'name'=>'vendedor', 
            'email'=>'vendedor@gmail.com',          
            'password'=>Hash::make('12345'),          

        ])->assignRole('vendedor');

        //Rol del cliente
        User::create([
            'name'=>'cliente', 
            'email'=>'cliente@gmail.com',          
            'password'=>Hash::make('12345'),          

        ])->assignRole('cliente');
    }
}
