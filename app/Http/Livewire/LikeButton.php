<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\LikeReccord;

class LikeButton extends Component
{
    public $count;
    public $post_id;
    public $post_type;
    public function mount($post_id, $post_type)
    {
        $data = LikeReccord::where('post_id', $post_id)
        ->where('post_type', $post_type)
        ->first();
        $this->count = $data->count;
    }

    public function like()
    {
        $this->count = $this->count + 1;
    }

    public function render()
    {
        return view('livewire.like-button');
    }
}
