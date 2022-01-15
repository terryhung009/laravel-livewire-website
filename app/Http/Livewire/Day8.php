<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Day8 extends Component
{
    public $title = '這是 Day8 的 title';
    public $toggle = true;

    protected $listeners = ['toggleTitle' => 'toggleTitle'];

    public function render()
    {
        return view('livewire.day8');
    }

    public function toggleTitle()
    {
        $this->toggle = !$this->toggle;
    }
    public function postAdd()
    {
        $this->dispatchBrowserEvent('postAdded');
    }
}
