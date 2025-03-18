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
    use WithPagination; 
    public $search;
    
    public $category ;
    public $governoratSelected;
    


    public function resetSearch()
    {
        $this->search = '';
        $this->category = '';
        $this->governoratSelected = '';
        $this->resetPage();
    }
    public function render()
    {

        // dd($this->governorates);
        
        $categories = Category::pluck('name', 'id');
        $governorate = GovernorateEnum::all();
        $events = Event::latest()
                ->when($this->search, function ($query) {
                    return $query->where('title', 'like', '%' . $this->search . '%')
                        ->orWhere('description', 'like', '%' . $this->search . '%');
                })
                ->when(trim($this->category) !== "", function ($query) {
                    return $query->where('category_id', $this->category);
                })
                ->when(trim($this->governoratSelected) !== "", function ($query) {
                    return $query->where('governorate', $this->governoratSelected);
                })
                ->paginate(3);

        return view('livewire.show-all-events',
            [
                'events' => $events,
                'categories' => $categories,
                'governorate' => $governorate,
                'search' => $this->search,
                'category' => $this->category,
                'governoratSelected' => $this->governoratSelected,
            ]
        );
    }
}
