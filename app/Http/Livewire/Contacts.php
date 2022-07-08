<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Contacts extends Component
{
    public $name = [];
    public $updateMode = false;
    public $inputs = [];
    public $i = 0;

    public function add($i)
    {
        $i = $i + 1;
        $this->i = $i;
        array_push($this->inputs, $i);
    }


    public function remove($i)
    {
        unset($this->inputs[$i]);
    }

    public function render()
    {
        return view('livewire.contacts');
    }
}
