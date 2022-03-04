<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name'=> 'marlon calla perez',
            'email'=>'marlon@gmail.com',
            'password'=>bcrypt('12345678')
        ])->assignRole('Admin');
        User::factory(99)->create();
    }
}
