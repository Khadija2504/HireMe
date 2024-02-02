<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ServicesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('services')->insert([
            ['id' => 2, 'titre' => 'Consectetur rerum qu wsedrftyhujk', 'description' => 'Omnis quos aut commo', 'user_id' => 2, 'category_id' => 1, 'created_at' => '2024-01-16 19:24:26', 'updated_at' => '2024-02-02 16:29:39', 'price' => 783],
            ['id' => 13, 'titre' => 'Graphic Design', 'description' => 'Professional graphic design services', 'user_id' => 2, 'category_id' => 1, 'created_at' => '2024-02-02 18:30:00', 'updated_at' => '2024-02-02 18:30:00', 'price' => 50],
            ['id' => 14, 'titre' => 'Writing Services', 'description' => 'Content writing and editing', 'user_id' => 3, 'category_id' => 3, 'created_at' => '2024-02-02 19:45:00', 'updated_at' => '2024-02-02 19:45:00', 'price' => 30],
            ['id' => 15, 'titre' => 'Mobile App Development', 'description' => 'Building innovative mobile applications', 'user_id' => 4, 'category_id' => 1, 'created_at' => '2024-02-03 08:15:00', 'updated_at' => '2024-02-03 08:15:00', 'price' => 120],
            ['id' => 16, 'titre' => 'Fitness Training', 'description' => 'Personalized fitness training sessions', 'user_id' => 5, 'category_id' => 2, 'created_at' => '2024-02-03 10:30:00', 'updated_at' => '2024-02-03 10:30:00', 'price' => 60],
            ['id' => 17, 'titre' => 'Social Media Management', 'description' => 'Managing and growing social media accounts', 'user_id' => 6, 'category_id' => 1, 'created_at' => '2024-02-03 12:45:00', 'updated_at' => '2024-02-03 12:45:00', 'price' => 80],
        ]);
    }
}
