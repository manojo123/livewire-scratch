<?php

namespace Tests\Feature;

use App\Http\Livewire\SearchDropdown;
use Faker\Provider\Youtube;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Support\Str;
use Livewire\Livewire;
use Tests\TestCase;

class SearchDropdownTest extends TestCase
{
    use RefreshDatabase, WithFaker;

    /** @test */
    public function search_dropdown_page_contains_search_dropdown_livewire()
    {
        $this->signIn();

        $this
            ->get('search-dropdown')
            ->assertSeeLivewire('search-dropdown');
    }

    /** @test */
    public function search_dropdown_searches_correctly()
    {
        Livewire::test(SearchDropdown::class)
            ->assertDontSee('John Lennon')
            ->set('search', 'Imagine')
            ->assertSee('John Lennon');
    }

    /** @test */
    public function search_dropdown_shows_message_if_no_song_exists()
    {
        $random_str = Str::random(50);
        Livewire::test(SearchDropdown::class)
            ->set('search', $random_str)
            ->assertSee('No results found for ' . $random_str);
    }
}
