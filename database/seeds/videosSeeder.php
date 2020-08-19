<?php

use Illuminate\Database\Seeder;
use App\Video;

class videosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Video::create([
            'name' => 'test.mp4',
            'poster' => 'fortnite.png',
            'ID_jeu' => '1',
        ]);
    }
}
