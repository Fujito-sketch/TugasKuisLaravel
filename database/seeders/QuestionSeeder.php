<?php

namespace Database\Seeders;

use App\Models\Question;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class QuestionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Question::query()->create([
            'name' => 'Berapakah jumlah hari dalam satu minggu?',
            'correctAnswer' => '7',
            'prize_id' => 1,
        ]);
    }
}
