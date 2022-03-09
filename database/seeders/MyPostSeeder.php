<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class MyPostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('posts')->insert([[
            'nama' => 'Basket Ball 1',
            'harga' => 50,
            'foto' => 'basketball.png',
        ],
            [
        
            'nama' => 't-shirtaa 1',
            'harga' => 40,
            'foto' => 't-shirt.png',
        ],
[
        
            'nama' => 'gameaa 1',
            'harga' => 30,
            'foto' => 'game.png',
        ],
[
        
            'nama' => 'Basket Ball 2',
            'harga' => 20,
            'foto' => 'basketball.png',
        ],
[
        
            'nama' => 't-shirt 2',
            'harga' => 110,
            'foto' => 't-shirt.png',
        ],
        [
            'nama' => 'game 2',
            'harga' => 10,
            'foto' => 'game.png',
            ]
        
        ]);

      
}
}