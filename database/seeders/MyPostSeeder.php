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
            'nama' => 'Basket Ball',
            'harga' => 50,
            'foto' => 'basketball.png',
        ],
            [
        
            'nama' => 't-shirt',
            'harga' => 50,
            'foto' => 't-shirt.png',
        ],
[
        
            'nama' => 'game',
            'harga' => 50,
            'foto' => 'game.png',
        ],
[
        
            'nama' => 'Basket Ball',
            'harga' => 50,
            'foto' => 'basketball.png',
        ],
[
        
            'nama' => 't-shirt',
            'harga' => 50,
            'foto' => 't-shirt.png',
        ],
        [
            'nama' => 'game',
            'harga' => 50,
            'foto' => 'game.png',
            ]
        
        ]);

      
}
}