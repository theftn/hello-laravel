<?php

namespace App\Livewire\Post;

use App\Models\Post;
use Livewire\Component;

<<<<<<< HEAD
=======

>>>>>>> febcfe5a77e2e0eb3e745e475bd864a7688acae1
class PostList extends Component
{
    public function render()
    {
<<<<<<< HEAD
        return view('livewire.post.post-list',[
        'posts' => Post::all()
    ]);
=======
        return view('livewire.post.post-list', [
            'posts' => Post::all()
        ]);
>>>>>>> febcfe5a77e2e0eb3e745e475bd864a7688acae1
    }
}
