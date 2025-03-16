<?php

namespace Tests\Feature\Livewire;

use App\Livewire\ShowSingleEvent;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Livewire\Livewire;
use Tests\TestCase;

class ShowSingleEventTest extends TestCase
{
    /** @test */
    public function renders_successfully()
    {
        Livewire::test(ShowSingleEvent::class)
            ->assertStatus(200);
    }
}
