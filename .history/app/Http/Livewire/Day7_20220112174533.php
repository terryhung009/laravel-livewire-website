<?php

namespace App\Http\Livewire;

use Livewire\Component;
class Day7 extends Component
{
public $count = 0;

public function addCount()
{
$this->count++;
}