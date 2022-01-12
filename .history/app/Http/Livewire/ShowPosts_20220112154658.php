<?php

namespace App\Http\Livewire;

use Livewire\Component;

class ShowPosts extends Component
{
    public function render()
    {
        // return view('livewire.show-posts');
        return view('livewire.show-posts')
            ->layout('layouts.base');
    }
    public $title = 'Hello World!';
}
