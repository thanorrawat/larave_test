<?php

namespace App\Http\Livewire;
use App\Models\Post;
use Livewire\Component;

class Like extends Component
{
    public Post $post;

    public function mount(Post $post)
    {
        $this->post = $post;
    }

    public function like(): void
    {
        // TODO
    }
    public function render()
    {
        return view('livewire.like');
    }
}
