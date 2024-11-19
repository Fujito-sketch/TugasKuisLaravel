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
        $questions = [
            [
                'name' => 'Siapa presiden pertama Indonesia?',
                'correctAnswer' => 'Ir. Soekarno',
                'prize_id' => 1,
            ],
            [
                'name' => 'Apa ibu kota negara Jepang?',
                'correctAnswer' => 'Tokyo',
                'prize_id' => 2,
            ],
            [
                'name' => 'Berapa jumlah hari dalam setahun pada tahun biasa?',
                'correctAnswer' => '365',
                'prize_id' => 3,
            ],
            [
                'name' => 'Apa nama planet terbesar di tata surya?',
                'correctAnswer' => 'Jupiter',
                'prize_id' => 4,
            ],
            [
                'name' => 'Siapa penulis novel "Laskar Pelangi"?',
                'correctAnswer' => 'Andrea Hirata',
                'prize_id' => 5,
            ],
            [
                'name' => 'Di negara manakah Menara Eiffel berada?',
                'correctAnswer' => 'Perancis',
                'prize_id' => 6,
            ],
            [
                'name' => 'Apa satuan pokok dalam sistem SI untuk panjang?',
                'correctAnswer' => 'Meter',
                'prize_id' => 7,
            ],
            [
                'name' => 'Siapa yang menemukan bola lampu?',
                'correctAnswer' => 'Thomas Alva Edison',
                'prize_id' => 8,
            ],
            [
                'name' => 'Berapa jumlah provinsi di Indonesia pada tahun 2024?',
                'correctAnswer' => '38',
                'prize_id' => 9,
            ],
            [
                'name' => 'Apa nama organisasi dunia yang menangani kesehatan?',
                'correctAnswer' => 'WHO',
                'prize_id' => 10,
            ],
            [
                'name' => 'Siapakah ilmuwan yang mengemukakan teori relativitas?',
                'correctAnswer' => 'Albert Einstein',
                'prize_id' => 11,
            ],
            [
                'name' => 'Apa nama ibu kota negara Kenya?',
                'correctAnswer' => 'Nairobi',
                'prize_id' => 12,
            ],
            [
                'name' => 'Apa istilah yang digunakan untuk garis khatulistiwa dalam bahasa Inggris?',
                'correctAnswer' => 'Equator',
                'prize_id' => 13,
            ],
            [
                'name' => 'Siapa tokoh nasional yang dijuluki "Bapak Koperasi Indonesia"?',
                'correctAnswer' => 'Mohammad Hatta',
                'prize_id' => 14,
            ],
        ];

        foreach ($questions as $question) {
            Question::query()->create($question);
        }
    }
}
