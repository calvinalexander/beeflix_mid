<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('genres')->insert([
            ['genre_name' => 'Drama'],
            ['genre_name' => 'Kids'],
            ['genre_name' => 'Tv Show']
        ]);

        DB::table('movies')->insert([
            [
                'genre_id' => 1,
                'movie_title' => 'Alive',
                'photo' => 'assets/d1.jpg',
                'description' => 'Ini film Alive',
                'rating' => 4.5
            ],

            [
                'genre_id' => 1,
                'movie_title' => 'The Man Standing Next',
                'photo' => 'assets/d2.jpg',
                'description' => 'Ini film The Man Standing Next',
                'rating' => 4.6
            ],
            [
                'genre_id' => 1,
                'movie_title' => 'Ashfall',
                'photo' => 'assets/d3.jpg',
                'description' => 'Ini film Ashfall',
                'rating' => 4.1
            ],
            [
                'genre_id' => 1,
                'movie_title' => 'New World',
                'photo' => 'assets/d4.jpg',
                'description' => 'Ini film New World',
                'rating' => 4.3
            ],
            [
                'genre_id' => 1,
                'movie_title' => 'Midnight Runners',
                'photo' => 'assets/d5.jpg',
                'description' => 'Ini film Midnight Runners',
                'rating' => 4.4
            ],
            [
                'genre_id' => 1,
                'movie_title' => 'The Admiral: Roaring Current',
                'photo' => 'assets/d6.jpg',
                'description' => 'Ini film The Admiral: Roaring Current',
                'rating' => 4.5
            ],
            [
                'genre_id' => 2,
                'movie_title' => 'The Grinch',
                'photo' => 'assets/k1.jpg',
                'description' => 'Ini film The Grinch',
                'rating' => 4.5
            ],
            [
                'genre_id' => 2,
                'movie_title' => 'Into the Woods',
                'photo' => 'assets/k2.jpg',
                'description' => 'Ini film Into the Woods',
                'rating' => 4.6
            ],
            [
                'genre_id' => 2,
                'movie_title' => 'The Boss Baby',
                'photo' => 'assets/k3.jpg',
                'description' => 'Ini film The Boss Baby',
                'rating' => 4.9
            ],
            [
                'genre_id' => 2,
                'movie_title' => 'Kung Fu Panda',
                'photo' => 'assets/k4.jpg',
                'description' => 'Ini film Kung Fu Panda',
                'rating' => 4.9
            ],
            [
                'genre_id' => 2,
                'movie_title' => 'The Angry Birds Movie',
                'photo' => 'assets/k5.jpg',
                'description' => 'Ini film The Angry Birds Movie',
                'rating' => 4.3
            ],
            [
                'genre_id' => 2,
                'movie_title' => 'Toy Story',
                'photo' => 'assets/k6.jpg',
                'description' => 'Ini film Toy Story',
                'rating' => 4.7
            ],
            [
                'genre_id' => 3,
                'movie_title' => 'America Got Talent',
                'photo' => 'assets/ts1.jpg',
                'description' => 'Ini film America Got Talent',
                'rating' => 4.1
            ],
            [
                'genre_id' => 3,
                'movie_title' => 'The Daily Show',
                'photo' => 'assets/ts2.jpg',
                'description' => 'Ini film The Daily Show',
                'rating' => 4.4
            ],
            [
                'genre_id' => 3,
                'movie_title' => 'Chicago P.D.',
                'photo' => 'assets/ts3.jpg',
                'description' => 'Ini film Chicago P.D.',
                'rating' => 4.6
            ],
            [
                'genre_id' => 3,
                'movie_title' => 'Seinfeld',
                'photo' => 'assets/ts4.jpg',
                'description' => 'Ini film Seinfeld',
                'rating' => 4.6
            ],
            [
                'genre_id' => 3,
                'movie_title' => 'NCIS: Los Angeles',
                'photo' => 'assets/ts5.jpg',
                'description' => 'Ini film NCIS: Los Angeles',
                'rating' => 4.7
            ],
            [
                'genre_id' => 3,
                'movie_title' => 'Alf',
                'photo' => 'assets/ts6.jpg',
                'description' => 'Ini film Alf',
                'rating' => 4.7
            ]
        ]);

        $faker = Faker\Factory::create();
        $number =0;
        for($i=1; $i<=200; $i++ ){
            $movie = DB::table('movies')->first();
            $num = ($number%15) +1 ;
            $number= $number+1;
            DB::table('episodes')->insert([
                'movie_id' => $movie->id,
                'episode' => $num,
                'episode_title' => "Episode: $faker->name()"
            ]);
        }
    }
}
