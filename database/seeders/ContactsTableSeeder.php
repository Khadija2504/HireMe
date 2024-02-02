<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ContactsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('contacts')->insert([
            ['id' => 11, 'user_id' => 4, 'transaction' => 'send', 'service_id' => 8, 'message' => 'uijdv', 'created_at' => '2024-02-01 19:04:06', 'updated_at' => '2024-02-01 19:04:06'],
            ['id' => 35, 'user_id' => 2, 'transaction' => 'send', 'service_id' => 13, 'message' => 'Interested in your graphic design services. Please provide more details.', 'created_at' => '2024-02-03 14:30:00', 'updated_at' => '2024-02-03 14:30:00'],
            ['id' => 36, 'user_id' => 3, 'transaction' => 'send', 'service_id' => 14, 'message' => 'I need your writing services for a project. Can we discuss further?', 'created_at' => '2024-02-03 15:45:00', 'updated_at' => '2024-02-03 15:45:00'],
            ['id' => 37, 'user_id' => 4, 'transaction' => 'send', 'service_id' => 15, 'message' => 'Interested in developing a mobile app. Let\'s talk about the project requirements.', 'created_at' => '2024-02-04 09:15:00', 'updated_at' => '2024-02-04 09:15:00'],
            ['id' => 38, 'user_id' => 5, 'transaction' => 'send', 'service_id' => 16, 'message' => 'Looking for fitness training sessions. What are your rates and availability?', 'created_at' => '2024-02-04 11:30:00', 'updated_at' => '2024-02-04 11:30:00'],
            ['id' => 39, 'user_id' => 6, 'transaction' => 'send', 'service_id' => 17, 'message' => 'Need help with social media management. Can we discuss your services?', 'created_at' => '2024-02-04 13:45:00', 'updated_at' => '2024-02-04 13:45:00'],
        ]);
    }
}
