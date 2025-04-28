<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;
use App\Models\Personne;
class PersonneSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {   
        // for ($i = 0; $i < 10; $i++) {
        //     DB::table('personnes')->insert(
        //         [
        //             'cin' => 'EE'.Str::random(10),
        //             'nom' => Str::random(5),
        //             'prenom' => Str::random(7),
        //             'email' => Str::random(10).'@gmail.com',
        //             'password' => Hash::make('password'),
        //             'city' => Str::random(5),
        //             'salaire' => rand(1000, 5000),
        //             'telephone' => Str::random(10),
        //             'created_at' => now(),
        //             'updated_at' => now(),
                    
                    
        //         ]);
        // }
        Personne::factory(10)->create();

        // Example of inserting a single record
       
}
}
