<?php

namespace Database\Seeders;

use App\Models\Prize;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PrizeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $prizes = [
            [
                'value' => 500,
            ],
            [
                'value' => 1000,
            ],
            [
                'value' => 2000,
            ],
            [
                'value' => 3000,
            ],
            [
                'value' => 5000,
                'checkpoint' => true
            ],
            [
                'value' => 7000,
            ],
            [
                'value' => 10000,
            ],
            [
                'value' => 20000,
            ],
            [
                'value' => 30000,
            ],
            [
                'value' => 50000,
                'checkpoint' => true
            ],
            [
                'value' => 100000,
            ],
            [
                'value' => 250000,
            ],
            [
                'value' => 500000,
            ],
            [
                'value' => 1000000,
                'checkpoint' => true
            ],
        ];

        foreach ($prizes as $prize) {
            Prize::query()->create($prize);
        }
    }
}
