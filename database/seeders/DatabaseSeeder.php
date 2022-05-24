<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);


        DB::table('users') ->insert([
            'nama' => 'admin',
            'email' => 'admin',
            'password' => Hash::make('admin'),
        ]);


        DB::table('warnet') ->insert([
            'no_pc' => 'PC-001',
            'pemesan' => 'Pemesan-001',
            'tanggal' => '2020-05-24',
            'hari' => 'Senin',
            'jam' => '08:00',
        ]);



    }
}
