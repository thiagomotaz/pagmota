<?php

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
        DB::table('users')->insert([
            'name' => "Thiago Mota",
            'email' => "thiagomotax@gmail.com",
            'email_verified_at' => "2020-07-24 14:26:20",
            'password' => '$2y$10$F9bAmrjpmRqRB0CAfhwEBul2bi5QZymeByVFkAFlWvzF5bbE8SOA2',
            'created_at' => '2020-07-24 14:25:42',
            'updated_at' => '2020-07-24 14:26:20'
        ]);
    }
}
