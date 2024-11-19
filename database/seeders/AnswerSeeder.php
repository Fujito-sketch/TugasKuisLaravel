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
                'answer1' => 'Soeharto',
                'answer2' => 'Joko Widodo',
                'answer3' => 'Ir. Soekarno',
                'answer4' => 'Megawati Soekarnoputri',
            ],
            [
                'question_id' => 2,
                'answer1' => 'Seoul',
                'answer2' => 'Tokyo',
                'answer3' => 'Bangkok',
                'answer4' => 'Beijing',
            ],
            [
                'question_id' => 3,
                'answer1' => '356',
                'answer2' => '360',
                'answer3' => '365',
                'answer4' => '366',
            ],
            [
                'question_id' => 4,
                'answer1' => 'Bumi',
                'answer2' => 'Mars',
                'answer3' => 'Jupiter',
                'answer4' => 'Saturnus',
            ],
            [
                'question_id' => 5,
                'answer1' => 'Tere Liye',
                'answer2' => 'Andrea Hirata',
                'answer3' => 'Dewi Lestari',
                'answer4' => 'Pramoedya Ananta Toer',
            ],
            [
                'question_id' => 6,
                'answer1' => 'Spanyol',
                'answer2' => 'Italia',
                'answer3' => 'Perancis',
                'answer4' => 'Jerman',
            ],
            [
                'question_id' => 7,
                'answer1' => 'Gram',
                'answer2' => 'Meter',
                'answer3' => 'Liter',
                'answer4' => 'Detik',
            ],
            [
                'question_id' => 8,
                'answer1' => 'Nikola Tesla',
                'answer2' => 'Alexander Graham Bell',
                'answer3' => 'Thomas Alva Edison',
                'answer4' => 'Isaac Newton',
            ],
            [
                'question_id' => 9,
                'answer1' => '33',
                'answer2' => '34',
                'answer3' => '37',
                'answer4' => '38',
            ],
            [
                'question_id' => 10,
                'answer1' => 'WHO',
                'answer2' => 'FAO',
                'answer3' => 'UNHCR',
                'answer4' => 'UNICEF',
            ],
            [
                'question_id' => 11,
                'answer1' => 'Isaac Newton',
                'answer2' => 'Albert Einstein',
                'answer3' => 'Galileo Galilei',
                'answer4' => 'Stephen Hawking',
            ],
            [
                'question_id' => 12,
                'answer1' => 'Kampala',
                'answer2' => 'Nairobi',
                'answer3' => 'Addis Ababa',
                'answer4' => 'Rabat',
            ],
            [
                'question_id' => 13,
                'answer1' => 'Equinox',
                'answer2' => 'Equator',
                'answer3' => 'Meridian',
                'answer4' => 'Longitude',
            ],
            [
                'question_id' => 14,
                'answer1' => 'Ki Hajar Dewantara',
                'answer2' => 'Mohammad Hatta',
                'answer3' => 'Soepomo',
                'answer4' => 'Sutan Sjahrir',
            ],
//            [
//                'question_id' => 15,
//                'answer1' => 'Capsaicin',
//                'answer2' => 'Lycopene',
//                'answer3' => 'Caffeine',
//                'answer4' => 'Curcumin',
//            ],
//            [
//                'question_id' => 16,
//                'answer1' => '4',
//                'answer2' => '5',
//                'answer3' => '6',
//                'answer4' => '7',
//            ],
//            [
//                'question_id' => 17,
//                'answer1' => 'Revolusi Industri',
//                'answer2' => 'Revolusi Meiji',
//                'answer3' => 'Revolusi Tokugawa',
//                'answer4' => 'Revolusi Edo',
//            ],
//            [
//                'question_id' => 18,
//                'answer1' => 'Al-Baqarah',
//                'answer2' => 'Al-Fatihah',
//                'answer3' => 'Al-Alaq',
//                'answer4' => 'An-Nas',
//            ],
//            [
//                'question_id' => 19,
//                'answer1' => 'Marco Polo',
//                'answer2' => 'Ferdinand Magellan',
//                'answer3' => 'Christopher Columbus',
//                'answer4' => 'Vasco da Gama',
//            ],
//            [
//                'question_id' => 20,
//                'answer1' => 'Teori Relativitas',
//                'answer2' => 'Teori Kuantum Medan',
//                'answer3' => 'Teori String',
//                'answer4' => 'Teori Chaos',
//            ],
        ];


        foreach ($answers as $answer) {
            Answer::query()->create($answer);
        }
    }
}
