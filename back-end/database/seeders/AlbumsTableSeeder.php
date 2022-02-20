<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AlbumsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $albums = [
            [
                'id'            => 1,
                'user_id'       => 1,
                "title"         =>  "Nandhaka Pieris",
                "description"   =>  "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.",
                "img"           =>  "img/landscape1.jpg",
                "created_at"    =>  "2015-05-01 00:00:00",
                "updated_at"    =>  "2015-05-01 00:00:00",
                "featured"      =>  1
            ],
            [
                'id'            => 2,
                'user_id'       => 1,
                "title"         =>  "New West Calgary",
                "description"   =>  "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.",
                "img"           =>  "img/landscape2.jpg",
                "created_at"    =>  "2016-05-01 00:00:00",
                "updated_at"    =>  "2016-05-01 00:00:00",
                "featured"      =>  0
            ],
            [
                'id'            => 3,
                'user_id'       => 1,
                "title"         =>  "Australian Landscape",
                "description"   =>  "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.",
                "img"           =>  "img/landscape3.jpg",
                "created_at"    =>  "2015-02-02 00:00:00",
                "updated_at"    =>  "2015-02-02 00:00:00",
                "featured"      =>  0
            ],
            [
                'id'            => 4,
                'user_id'       => 1,
                "title"         =>  "Halvergate Marsh",
                "description"   =>  "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.",
                "img"           =>  "img/landscape4.jpg",
                "created_at"    =>  "2014-04-01 00:00:00",
                "updated_at"    =>  "2014-04-01 00:00:00",
                "featured"      =>  1
            ],
            [
                'id'            => 5,
                'user_id'       => 1,
                "title"         =>  "Rikkis Landscape",
                "description"   =>  "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.",
                "img"           =>  "img/landscape5.jpg",
                "created_at"    =>  "2010-09-01 00:00:00",
                "updated_at"    =>  "2010-09-01 00:00:00",
                "featured"      =>  0
            ],
            [
                'id'            => 6,
                'user_id'       => 1,
                "title"         =>  "Kiddi Kristjans Iceland",
                "description"   =>  "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.",
                "img"           =>  "img/landscape6.jpg",
                "created_at"    =>  "2015-07-01 00:00:00",
                "updated_at"    =>  "2015-07-01 00:00:00",
                "featured"      =>  1
            ]
        ];

        DB::table('albums')->insert($albums);
    }
}
