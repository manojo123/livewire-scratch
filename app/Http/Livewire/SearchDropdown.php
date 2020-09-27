<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\Http;
use Livewire\Component;

class SearchDropdown extends Component
{
	public $search;
	public $searchResults = [];

	public function updatedSearch()
	{
		if (strlen($this->search) < 3) {
			$this->searchResults = [];

			return;
		}

		$this->searchResults = Http::
			get('https://itunes.apple.com/search?term=' . $this->search . '&entity=song&limit=5')
			->json()["results"];
	}



    public function render()
    {
        return view('livewire.search-dropdown');
    }
}
