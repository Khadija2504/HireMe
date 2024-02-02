<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            ['id' => 1, 'Nom' => 'khadija', 'Prenom' => 'khadija', 'Phone' => 987654321, 'email' => 'khadija@gmail.com', 'password' => '$2y$10$ZuReg1S5j2uv24Fd20hOXuoWSIHy7d/nB1e814lSQiB.TdHB.OLdK', 'age' => 19, 'Role' => 'client', 'created_at' => '2024-01-30 09:59:58', 'updated_at' => '2024-01-30 09:59:58'],
            ['id' => 2, 'Nom' => 'amal', 'Prenom' => 'amal', 'Phone' => 987654367, 'email' => 'amal@gmail.com', 'password' => '$2y$10$ZuReg1S5j2uv24Fd20hOXuoWSIHy7d/nB1e814lSQiB.TdHB.OLdK', 'age' => 24, 'Role' => 'client', 'created_at' => '2024-01-30 10:12:02', 'updated_at' => '2024-01-30 10:12:02'],
            ['id' => 3, 'Nom' => 'john', 'Prenom' => 'doe', 'Phone' => 987654321, 'email' => 'john.doe@example.com', 'password' => '$2y$10$ZuReg1S5j2uv24Fd20hOXuoWSIHy7d/nB1e814lSQiB.TdHB.OLdK', 'age' => 30, 'Role' => 'client', 'created_at' => '2024-02-02 12:30:45', 'updated_at' => '2024-02-02 12:30:45'],
            ['id' => 4, 'Nom' => 'meriem', 'Prenom' => 'meriem', 'Phone' => 1234560912, 'email' => 'meriem@gmail.com', 'password' => '$2y$10$RoSCotuMxc0TEqMVQDW1vuw9VLa1zpU66lS5JMxyYsK.2pqNNmCA2', 'age' => 20, 'Role' => 'client', 'created_at' => '2024-02-01 13:23:41', 'updated_at' => '2024-02-01 14:01:16'],
            ['id' => 5, 'Nom' => 'youssef', 'Prenom' => 'yyyyy yyyyyyyy', 'Phone' => 987654321, 'email' => 'youssef@gmail.com', 'password' => '$2y$10$P6OALt8ObkNqBvZbISqtVOBOLm6JRj6C.5NazDyQYv3M5pyJcFCRS', 'age' => 22, 'Role' => 'client', 'created_at' => '2024-02-01 23:10:03', 'updated_at' => '2024-02-02 14:32:19'],
            ['id' => 6, 'Nom' => 'emma', 'Prenom' => 'smith', 'Phone' => 987654345, 'email' => 'emma.smith@example.com', 'password' => '$2y$10$P6OALt8ObkNqBvZbISqtVOBOLm6JRj6C.5NazDyQYv3M5pyJcFCRS', 'age' => 28, 'Role' => 'client', 'created_at' => '2024-02-02 15:45:22', 'updated_at' => '2024-02-02 15:45:22'],
        ]);
    }
}
