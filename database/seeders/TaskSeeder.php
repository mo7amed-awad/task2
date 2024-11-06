<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\User;

class TaskSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Retrieve a random user ID (or use any specific user)
        $userId = User::inRandomOrder()->first()->id;

        DB::table('tasks')->insert([
            [
                'title' => 'Complete Laravel project',
                'description' => 'Finish all pending tasks in the Laravel project and review the code.',
                'completion_status' => 'completed',
                'user_id' => $userId,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Prepare weekly report',
                'description' => 'Summarize the progress and present it in the weekly meeting.',
                'completion_status' => 'completed',
                'user_id' => $userId,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Review database schema',
                'description' => 'Check if all necessary fields are present and optimized.',
                'completion_status' => 'completed',
                'user_id' => $userId,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
