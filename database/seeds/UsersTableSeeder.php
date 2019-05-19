<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Let's truncate our existing records to start from scratch.
        User::truncate();
        
        //Create the test user
        User::create([
            'name' => 'Tester',
            'email' => 'test@example.com',
            'email_verified_at' => null,
            'password' => Hash::make('12345678'),
            'remember_token' => null,
            'created_at' => '2019-04-27 18:46:30',
            'updated_at' => '2019-04-27 18:46:30',
            'deleted_at' => null
        ]);
    }
}
