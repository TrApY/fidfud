<?php

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
        factory(App\User::class)->create([
            'name' => 'Jota',
            'role' => 'admin',
            'email' => 'jota@jota.com',
            'password' => bcrypt('admin'),
        ]);

        factory(App\User::class, 49)->create();
    }
}
