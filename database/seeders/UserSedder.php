<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSedder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
         $user = User::factory()->create([
            'name' => 'Richard Berrios',
            'email' => 'richard@test.com',
            'password' => bcrypt('12345678'),
            'dni' => '281-230405-123N',
            'phone' => '88335566',
            'address' => 'Calle de prueba #123',
         ]);
         $user->assignRole('Admin');
         $user->doctor()->create();
    }
}
