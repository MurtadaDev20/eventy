<?php

namespace App\Livewire;

use App\Enums\GovernorateEnum;
use App\Models\Category;
use App\Models\Event;
use Livewire\WithoutUrlPagination;
use Livewire\WithPagination;
use Livewire\Component;

class ShowAllEvents extends Component
{
    use WithPagination, WithoutUrlPagination; 
    public function render()
    {
        $categories = Category::pluck('name', 'id');
        $governorate = GovernorateEnum::all();
        $events = Event::latest()->paginate(3);

        return view('livewire.show-all-events',
            [
                'events' => $events,
                'categories' => $categories,
                'governorate' => $governorate
            ]
        );
    }
}
