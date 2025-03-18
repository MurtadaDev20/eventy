<?php

namespace App\Livewire;

use App\Models\Event;
use Livewire\Component;
use Livewire\WithoutUrlPagination;
use Livewire\WithPagination;

class EventComment extends Component
{
    use WithPagination, WithoutUrlPagination; 


    public Event $event;

    
    #[Rule('required|min:3|max:200')]
    public string $commentUser;
    public function submit()
    {
        
        // $this->validateOnly('commentUser');

        $this->event->comments()->create([
            'body' => $this->commentUser,
            'user_id' => auth()->id()
        ]);

        $this->reset('commentUser');
    }

     public function getCommentsProperty()
    {
        return $this->event->comments()->with('user')->latest()->paginate(5);
    }

    public function render()
    {
        return view('livewire.event-comment');
    }
}
