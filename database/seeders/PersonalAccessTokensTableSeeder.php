<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PersonalAccessTokensTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('personal_access_tokens')->insert([
            ['id' => 1, 'tokenable_type' => 'App\\Models\\User', 'tokenable_id' => 2, 'name' => 'authToken', 'token' => 'bed105f31020...', 'abilities' => '["*"]', 'last_used_at' => null, 'expires_at' => null, 'created_at' => '2024-01-30 10:13:30', 'updated_at' => '2024-01-30 10:13:30'],
        ]);
    }
}
