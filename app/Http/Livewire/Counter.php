<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Counter extends Component
{
    public int $counter = 0;

    public function increment()
    {
        $this->counter++;
    }

    public function decrement()
    {
        $this->counter--;
    }

    public function resetCounter()
    {
        $this->reset('counter');
        // OR $this->counter = 0;
    }

    public function render()
    {
//        return view('livewire.counter');
        // if you want to use alpine version use live below instead:
         return view('livewire.counter-alpine');
    }
}
