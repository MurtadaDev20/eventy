<?php

namespace App\Livewire;

use App\Models\Event;
use Livewire\Component;

class Featured extends Component
{
    public function render()
    {
        $events_featured = Event::where('featured', 1)->Latest()->get();
        return view('livewire.featured',
            [
                'events_featured' => $events_featured
            ]
        );
    }
}
