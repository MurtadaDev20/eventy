<?php

namespace App\Livewire;

use App\Models\Event;
use Livewire\Component;

class Latest extends Component
{
    public function render()
    {
        $latests = Event::where('featured' , 0)->latest()->take(6)->get();
        return view('livewire.latest' ,
            [
                'latests' => $latests
            ]
        );
    }
}
