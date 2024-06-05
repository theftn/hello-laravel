<?php

namespace App\Livewire\Post;

use App\Models\Post;
use Livewire\Component;

class PostList extends Component
{
    public function render()
    {
        return view('livewire.post.post-list',[
        'posts' => Post::all()
    ]);
}}
