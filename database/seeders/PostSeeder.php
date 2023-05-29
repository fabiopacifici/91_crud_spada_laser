<?php

namespace Database\Seeders;

use App\Models\Post;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $posts = config('db.posts');

        foreach ($posts as $post) {
            $newPost = new Post();
            $newPost->title = $post['title'];
            $newPost->body = $post['body'];
            $newPost->image = $post['image'];
            $newPost->save();
        }
    }
}
