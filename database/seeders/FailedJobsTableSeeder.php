<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FailedJobsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('failed_jobs')->insert([
            ['id' => 1, 'uuid' => '...', 'connection' => '...', 'queue' => '...', 'payload' => '...', 'exception' => '...', 'failed_at' => '...'],
        ]);
    }
}
