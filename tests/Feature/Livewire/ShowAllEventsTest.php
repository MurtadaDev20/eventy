<?php

namespace Tests\Feature\Livewire;

use App\Livewire\ShowAllEvents;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Livewire\Livewire;
use Tests\TestCase;

class ShowAllEventsTest extends TestCase
{
    /** @test */
    public function renders_successfully()
    {
        Livewire::test(ShowAllEvents::class)
            ->assertStatus(200);
    }
}
