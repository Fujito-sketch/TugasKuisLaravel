<?php

namespace Database\Seeders;

use App\Models\Answer;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AnswerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $answers = [
            [
                'question_id' => 1,
                'answer1' => '5',
                'answer2' => '6',
                'answer3' => '7',
                'answer4' => '8',
            ],
        ];

        foreach ($answers as $answer) {
            Answer::query()->create($answer);
        }
    }
}
