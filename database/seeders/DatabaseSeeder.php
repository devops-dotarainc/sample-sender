<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\User;
use App\Models\Cdn;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::insert([
            [
                'username' => 'user-01',
                'money' => 10000
            ],
            [
                'username' => 'user-02',
                'money' => 0
            ]
        ]);

        
        Cdn::create(
            [
                'key' => 'sample-receiver',
                'url' => 'http://127.0.0.1:8001/api/receiver'
            ]
        );
    }
}
