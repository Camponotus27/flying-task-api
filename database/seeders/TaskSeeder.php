<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Task;

class TaskSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Task::insert([

            [
                'id' => 1,
                'title' => "Docker junto a Cpanel",
                'body' => 'https://nocinit.com/blog/how-to-install-docker-on-cpanel-servers-tutorial/',
                'updated_at' => date('Y-m-d H:i:s'),
                'created_at' => date('Y-m-d H:i:s'),                 
            ],
            [
                'id' => 2,
                'title' => 'bases',
                'body' => 'los pajaros alguna ves volaron',
                'updated_at' => date('Y-m-d H:i:s'),
                'created_at' => date('Y-m-d H:i:s'),
            ],
             [
                'id' => 3,
                'title' => 'rubores',
                'body' => ':)',
                'updated_at' => date('Y-m-d H:i:s'),
                'created_at' => date('Y-m-d H:i:s'),
            ],
             [
                'id' => 4,
                'title' => 'sombras',
                'body' => 'loading',
                'updated_at' => date('Y-m-d H:i:s'),
                'created_at' => date('Y-m-d H:i:s'),
            ],
             [
                'id' => 5,
                'title' => 'bronsers',
                'body' => ':(',
                'updated_at' => date('Y-m-d H:i:s'),
                'created_at' => date('Y-m-d H:i:s'),
            ],
      ]);
    }
}
