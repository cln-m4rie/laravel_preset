<?php

declare(strict_types=1);

use App\Models\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $email = 'root@example.com';
        $password = Hash::make('root');

        factory(User::class)->create([
            'email' => $email,
            'password' => $password,
        ]);

        for ($i = 0; $i < 10; $i++) {
            factory(User::class)->create();
        }
    }
}
