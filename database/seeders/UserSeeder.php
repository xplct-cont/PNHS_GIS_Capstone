<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
          
        $users = [
            [
                'name' => 'Jasmin Secusana',
                'username' => '10546',
                'email' => 'jasminsecusana@gmail.com',
                'address' => 'Looc, Calape, Bohol',
                'contact_no' => '0936-165-2608',
                'usertype' => 'admin',
                'advisory' => 'Administrator',
                'email_verified_at' => Carbon::now(),
                'password' => bcrypt('jas123'),
            ],
            [
                'name' => 'Gerome Nalla',
                'username' => '10547',
                'email' => 'geromenalla@gmail.com',
                'address' => 'Lomboy, Calape, Bohol',
                'contact_no' => '0912-345-6789',
                'advisory' => 'Grade 11-Faith',
                'usertype' => 'adviser',
                'email_verified_at' => Carbon::now(),
                'password' => bcrypt('gerome123'),
            ],
           

        ];
        foreach($users as $user){
            User::create($user);

        }
    }
}