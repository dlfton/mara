<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class userSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $users = [
            [
                'name'=>'Fathon',
                'email'=>'fathon626@gmail.com',
                'phone'=>'081290904081',
                'password'=>bcrypt('admin1234'),
                'alamat'=>'tangerang selatan',
                'role'=>1
            ],
            [
                'name'=>'Nuzul',
                'email'=>'Nuzul@gmail.com',
                'phone'=>'081290907660',
                'password'=>bcrypt('admin1234'),
                'alamat'=>'tangerang selatan',
                'role'=> 0
            ]
        ];
        foreach($users as $user){
            User::create($user);
        }
    }
}
