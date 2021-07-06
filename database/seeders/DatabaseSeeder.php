<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
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
        DB::table('users')->insert([
            'name' => $this->faker->name(),
            'identificacion' => 123456789,
            'email' => $this->faker->unique()->safeEmail(),
            'email_verified_at' => now(),
            'password' => Hash::make('1151'),
            'remember_token' => Str::random(10),
        ]);
        \App\Models\User::factory(3)->create();
        \App\Models\Cuenta::factory(3)->create();
    }
}
