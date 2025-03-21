<?php

namespace Tests\Feature\Livewire;

use App\Livewire\Statistics;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Livewire\Livewire;
use Tests\TestCase;

class StatisticsTest extends TestCase
{
    /** @test */
    public function renders_successfully()
    {
        Livewire::test(Statistics::class)
            ->assertStatus(200);
    }
}
