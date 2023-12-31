<?php

namespace Database\Seeders;

use App\Models\Status;
use Illuminate\Database\Seeder;

class StatusTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $input = [
            [
                'status' => 0,
                'name' => 'Pending',
            ],
            [
                'status' => 1,
                'name' => 'Completed',
            ],
        ];

        foreach ($input as $data) {
            Status::create($data);
        }
    }
}
