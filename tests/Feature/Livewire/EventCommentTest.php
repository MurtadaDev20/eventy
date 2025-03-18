<?php

namespace Tests\Feature\Livewire;

use App\Livewire\EventComment;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Livewire\Livewire;
use Tests\TestCase;

class EventCommentTest extends TestCase
{
    /** @test */
    public function renders_successfully()
    {
        Livewire::test(EventComment::class)
            ->assertStatus(200);
    }
}
