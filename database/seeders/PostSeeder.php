<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('posts')->insert([
            'title' => 'This is title1.',
            'body' => 'This is body1',
            'user_id' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('posts')->insert([
            'title' => 'This is title2.',
            'body' => 'This is body2',
            'user_id' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('posts')->insert([
            'title' => 'This is title3.',
            'body' => 'This is body3',
            'user_id' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('posts')->insert([
            'title' => 'This is title4.',
            'body' => 'This is body4',
            'user_id' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('posts')->insert([
            'title' => 'This is title5.',
            'body' => 'This is body5',
            'user_id' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
