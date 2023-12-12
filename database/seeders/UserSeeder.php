<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\User;

class UserSeeder extends Seeder
{
    protected $model = User::class;
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::factory()->count(200)->create();
        User::factory()->create([
            'name'=>'admin',
            'role'=>'admin',
            'email'=>'admin@admin.com',
            'password' => '12345678',
        ]);

        User::factory()->create([
            'name'=>'user',
            'role'=>'user',
            'email'=>'user@user.com',
            'password' => '12345678',
        ]);

        User::factory()->create([
            'name'=>'Bad Bunny',
            'role'=>'artist',
            'email'=>'Bad@Bunny.com',
            'password' => '12345678',
        ]);


    }
}
