<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::truncate();

        User::create([
            'name'     => 'Tahuruzzoha Tuhin',
            'email'    => 'tahuruzzoha.tuhin@gmail.com',
            'password' => bcrypt('pingpong'),
            'is_admin' => true
        ]);
    }
}
