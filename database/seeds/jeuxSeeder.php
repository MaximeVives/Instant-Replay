<?php

use Illuminate\Database\Seeder;
use App\Jeu;

class jeuxSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Jeu::create([
            'nameG' => 'Fortnite',
            'image' => 'fortnite.png',
        ]);
        Jeu::create([
            'nameG' => 'Apex',
            'image' => 'apex.png',
        ]);
        Jeu::create([
            'nameG' => 'Lol',
            'image' => 'lol.png',
        ]);
        Jeu::create([
            'nameG' => 'Valorant',
            'image' => 'valorant.png',
        ]);

    }
}
