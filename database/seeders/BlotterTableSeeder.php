<?php

namespace Database\Seeders;

use App\Models\Blotter;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BlotterTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $blotters = [
            [
                'id' => 1,
                'complainant' => 'Test',
                'respondent' => 'Test',
                'victim' => 'Test',
                'type' => 'Incident',
                'location' => 'Test',
                'date' => '2023-04-15',
                'time' => '11:32',
                'details' => 'test details',
                'status' => 'status',
                'created_at' => now()
            ],
            [
                'id' => 2,
                'complainant' => 'Test 2',
                'respondent' => 'Test 2',
                'victim' => 'Test 2',
                'type' => 'Incident 2',
                'location' => 'Test 2',
                'date' => '2023-04-16',
                'time' => '12:32',
                'details' => 'test details 2',
                'status' => 'status',
                'created_at' => now()
            ],
        ];

        // Insert the data into the announcements table
        DB::table('blotter')->insert($blotters);
    }
}
