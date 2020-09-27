<?php

namespace Tests\Feature;

use App\Http\Livewire\DataTable;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Livewire\Livewire;
use Tests\TestCase;

class DataTableTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function datatable_page_contains_datatable_livewire()
    {
        $this->signIn();

        $this
            ->get('data-table')
            ->assertSeeLivewire('data-table');
    }

    /** @test */
    public function datatables_active_checkbox_works_correctly()
    {
        $user = User::factory()->create(['active' => true]);
        $user2 = User::factory()->create(['active' => false]);

        Livewire::test(DataTable::class)
            ->assertSee($user->name)
            ->assertDontSee($user2->name)
            ->set('active', false)
            ->assertSee($user2->name)
            ->assertDontSee($user->name);
    }

    /** @test */
    public function datatables_searches_names_correctly()
    {
        $user = User::factory()->create(['active' => true]);
        $user2 = User::factory()->create(['active' => false]);

        Livewire::test(DataTable::class)
            ->set('search', $user->email)
            ->assertSee($user->name)
            ->assertDontSee($user2->name);
    }

    /** @test */
    public function datatables_sorts_name_asc_correctly()
    {
        User::factory()->create(['name' => 'JOHN DOE A', 'active' => true]);
        User::factory()->create(['name' => 'JOHN DOE B', 'active' => true]);
        User::factory()->create(['name' => 'JOHN DOE C', 'active' => true]);

        Livewire::test(DataTable::class)
            ->call('sortBy', 'name')
            ->assertSeeInOrder(["JOHN DOE A", "JOHN DOE B", "JOHN DOE C"]);
    }

    /** @test */
    public function datatables_sorts_name_desc_correctly()
    {
        User::factory()->create(['name' => 'JOHN DOE C', 'active' => true]);
        User::factory()->create(['name' => 'JOHN DOE B', 'active' => true]);
        User::factory()->create(['name' => 'JOHN DOE A', 'active' => true]);

        Livewire::test(DataTable::class)
            ->call('sortBy', 'name')
            ->set('sortAsc', false)
            ->assertSeeInOrder(["JOHN DOE C", "JOHN DOE B", "JOHN DOE A"]);
    }

    /** @test */
    public function datatables_sorts_email_asc_correctly()
    {
        User::factory()->create(['email' => 'JOHN DOE A', 'active' => true]);
        User::factory()->create(['email' => 'JOHN DOE B', 'active' => true]);
        User::factory()->create(['email' => 'JOHN DOE C', 'active' => true]);

        Livewire::test(DataTable::class)
            ->call('sortBy', 'email')
            ->assertSeeInOrder(["JOHN DOE A", "JOHN DOE B", "JOHN DOE C"]);
    }

    /** @test */
    public function datatables_sorts_email_desc_correctly()
    {
        User::factory()->create(['email' => 'JOHN DOE C', 'active' => true]);
        User::factory()->create(['email' => 'JOHN DOE B', 'active' => true]);
        User::factory()->create(['email' => 'JOHN DOE A', 'active' => true]);

        Livewire::test(DataTable::class)
            ->call('sortBy', 'email')
            ->set('sortAsc', false)
            ->assertSeeInOrder(["JOHN DOE C", "JOHN DOE B", "JOHN DOE A"]);
    }

}
