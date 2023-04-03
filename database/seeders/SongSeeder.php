<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Song;

use Faker\Generator as Faker;

class SongSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for($i = 0; $i < 20; $i++) {
            $song = new Song;
            
            $song->title = $faker-> word();
            $song->album = $faker-> sentence(2);
            $song->author = $faker-> lastName() ;
            $song->editor = $faker-> lastName();
            $song->length = $faker-> time();
            $song->poster = "https://picsum.photos/200/300";
    
            $song->save();
        }
    }
}