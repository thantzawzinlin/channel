<?php

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
        App\User::create([
            'name' => 'thantzazw',
            'email' => 'thantzaw@email.com',
            'password' => bcrypt('kyiteTarPay'),
            'admin'=>1

        ]);
    }
}
