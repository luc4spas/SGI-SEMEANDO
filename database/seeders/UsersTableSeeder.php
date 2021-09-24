<?php
namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert(array (
            0 => 
            array (
                'name' => 'Catia',
                'email' => 'semeandofamilia@gmail.com',
                'email_verified_at' => now(),
                'password' => Hash::make('Semeando2021'),
                'created_at' => now(),
                'updated_at' => now(),
            ),
            1 => 
            array (
                'name' => 'Lucas',
                'email' => 'lucasjelpas@gmail.com',
                'email_verified_at' => now(),
                'password' => Hash::make('102030'),
                'created_at' => now(),
                'updated_at' => now(),
            ),
        ));
    }
}
