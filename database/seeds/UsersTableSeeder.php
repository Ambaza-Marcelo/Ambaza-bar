<?php

use App\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name'     => "Marcellin",
            'email'    => 'marcellin@gmail.com',
            'password' => bcrypt('Burundi'),
            'role'     => 'master',
            'active'   => 1,
            'verified' => 1,
        ]);
    }
}
