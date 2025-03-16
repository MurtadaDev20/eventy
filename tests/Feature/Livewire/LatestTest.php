<?php

namespace Tests\Feature\Livewire;

use App\Livewire\Latest;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Livewire\Livewire;
use Tests\TestCase;

class LatestTest extends TestCase
{
    /** @test */
    public function renders_successfully()
    {
        Livewire::test(Latest::class)
            ->assertStatus(200);
    }
}
