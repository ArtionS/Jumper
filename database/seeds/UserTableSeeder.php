<?php

use App\User;
use Illuminate\Database\Seeder;


class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(User::class , 9)->create();

//        User::create([
//            'name' => 'David',
//            'email' => 'david@prueba.com',
//            'password' => bcrypt('123456789')
//        ]);
    }
}
