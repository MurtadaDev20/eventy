<?php

namespace App\Livewire;

use App\Models\Category;
use App\Models\Event;
use App\Models\Visit;
use Livewire\Component;

class Statistics extends Component
{
    public function render()
    {
        $visitors = Visit::count();
        $catigories = Category::count();
        $events = Event::count();
        return view('livewire.statistics',
            compact('visitors', 'catigories', 'events')
        );
    }
}
