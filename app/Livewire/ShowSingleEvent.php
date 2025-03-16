<?php

namespace App\Livewire;

use App\Models\Event;
use Livewire\Component;

class ShowSingleEvent extends Component
{

    public $id;

    public function mount($id)
    {
        $this->id = $id;
    }

    public function render()
    {
        $event = Event::find($this->id);

        return view('livewire.show-single-event', [
            'event' => $event
        ]);
    }
}
