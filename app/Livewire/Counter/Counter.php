<?php

namespace App\Livewire\Counter;

use Livewire\Component;

class Counter extends Component
{

    public $counter =1;

    public $close=true;

    public function add()
    {
        $this->counter++;
    }

    public function minus()
    {
        if($this->counter>=1){

            $this->counter--;
        }
    }

    public function render()
    {
        return view('livewire.counter.counter');
    }
}
