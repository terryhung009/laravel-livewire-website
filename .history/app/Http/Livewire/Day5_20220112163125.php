<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Day5 extends Component
{
    public $title = 'Hello World!';
}
<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Day5 extends Component
{
    public function render()
    {
        // return view('livewire.show-posts');
        return view('livewire.show-posts')
            ->layout('layouts.base');
    }
    public $title = 'Hello World!';
}
