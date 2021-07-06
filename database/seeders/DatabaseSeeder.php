<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use \App\Models\User;
use \App\Models\Cuenta;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::factory(3)->create();
        User::factory()->createOne([
            'name' => 'Pedro Perez',
            'identificacion' => 123456789,
            'email' => 'pedro@gmail.com',
            'email_verified_at' => now(),
            'password' => Hash::make('1151'),
            'remember_token' => Str::random(10),
        ]);
        Cuenta::factory()->createOne([
            'saldo' => 10000,
            'numero' => 123456789,
            'propia' => True,
            'user_id' => User::where("identificacion","=","123456789")->get()->first(),

        ]);
        Cuenta::factory()->createOne([
            'saldo' => 10000,
            'numero' => 122456789,
            'propia' => True,
            'user_id' => User::where("identificacion","=","123456789")->get()->first(),

        ]);
        Cuenta::factory(3)->create();
    }
}
