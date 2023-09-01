<?php

namespace Database\Seeders;

use App\Models\Announcement;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AnnouncementTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $announcements = [
            [
                'id' => 1,
                'title' => 'First announcement',
                'description' => 'This is the first announcement',
                'image' => 'uploads/sample1.jpg',
                'created_at' => now()
            ],
            [
                'id' => 2,
                'title' => 'Second announcement',
                'description' => 'This is the second announcement',
                'image' => 'uploads/sample2.jpg',
                'created_at' => now()
            ],
            [
                'id' => 3,
                'title' => 'Third announcement',
                'description' => 'This is the third announcement',
                'image' => 'uploads/sample3.jpg',
                'created_at' => now()
            ],
        ];

        // Insert the data into the announcements table
        DB::table('announcements')->insert($announcements);
    }
}
