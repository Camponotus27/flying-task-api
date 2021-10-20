<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\EnglishDictionary;

class EnglishDictionarySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        EnglishDictionary::insert([

            [
                'id' => 1,
                'word' => "Table",
                'pronunciation' => 'tei.bl',
                'significance' => 'es una mesa',
                'note' => 'Es una prueba',
                'updated_at' => date('Y-m-d H:i:s'),
                'created_at' => date('Y-m-d H:i:s'),
            ],
            [
                'id' => 2,
                'word' => "Table",
                'pronunciation' => 'tei.bl',
                'significance' => 'es una mesa',
                'note' => 'Es una prueba',
                'updated_at' => date('Y-m-d H:i:s'),
                'created_at' => date('Y-m-d H:i:s'),
            ],
            [
                'id' => 3,
                'word' => "Table",
                'pronunciation' => 'tei.bl',
                'significance' => 'es una mesa',
                'note' => 'Es una prueba',
                'updated_at' => date('Y-m-d H:i:s'),
                'created_at' => date('Y-m-d H:i:s'),
            ],
            [
                'id' => 4,
                'word' => "Table",
                'pronunciation' => 'tei.bl',
                'significance' => 'es una mesa',
                'note' => 'Es una prueba',
                'updated_at' => date('Y-m-d H:i:s'),
                'created_at' => date('Y-m-d H:i:s'),
            ],
            [
                'id' => 5,
                'word' => "Table",
                'pronunciation' => 'tei.bl',
                'significance' => 'es una mesa',
                'note' => 'Es una prueba',
                'updated_at' => date('Y-m-d H:i:s'),
                'created_at' => date('Y-m-d H:i:s'),
            ]
        ]);
    }
}
