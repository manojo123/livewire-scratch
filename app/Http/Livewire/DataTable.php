<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;
use Livewire\WithPagination;

class DataTable extends Component
{
	use WithPagination;

	public $active = true;
	public $search;
	public $sortField;
	public $sortAsc = true;

	protected $queryString = ['search', 'active', 'sortField', 'sortAsc'];

	public function updatingSearch()
	{
		$this->resetPage();
	}

	public function sortBy($field)
	{
		if ($this->sortField == $field) {
			$this->sortAsc = !$this->sortAsc;
		}

		$this->sortField = $field;
	}

    public function render()
    {
        return view('livewire.data-table', [
        	'users' => User::where(function($query) {
	        		$query
	        			->where('name', 'like', '%' . $this->search . '%')
	        			->orWhere('email', 'like', '%' . $this->search . '%');
	        	})
        		->where('active', $this->active)
        		->when($this->sortField, function($query) {
        			$query->orderBy(
        				$this->sortField, 
        				($this->sortAsc ? 'asc' : 'desc')
        			);
        		})
        		->paginate(10)
        ]);
    }

    // public function paginationView()
    // {
    //     return 'livewire.custom-pagination-links-view';
    // }
}
