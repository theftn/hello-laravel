<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PostsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('posts')->truncate();

        foreach(range(1,100) as $key){
            $data[] = [
                'title' => 'Title' . $key,
                'content' => 'Content' . $key,
                'created_at' => now(),
                'updated_at' => now()
                
            ];
        }

        DB::table('posts') ->insert($data);

    }
}
