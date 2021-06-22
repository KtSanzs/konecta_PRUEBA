<?php

namespace Database\Seeders;

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
        App\User::create([
            'name'      => 'Katerine',
            'email'     => 'administradora@gmail.com',
            'password'     => bcrypt('123'),

        ]);

        factory(App\User::class, 7)->create();
    }
}
