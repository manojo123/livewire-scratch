<?php

namespace App\Http\Livewire;

use App\Models\Post;
use Livewire\Component;

class Posts extends Component
{
    public $posts;
    public $mainPost;

    public function defineMain($post = false)
    {
    	if ($post) {
    		$this->mainPost = $this->posts[$post];
    	} else {
	    	if ($this->posts->isEmpty()) {
	    		$this->mainPost = null;
	    	} else {
	    		$this->mainPost = $this->posts[0];
	    	}
    	}
    }

    public function mount()
    {
        $this->posts = Post::orderBy('created_at', 'asc')->get();
    	
        $this->defineMain();
    }

    public function render()
    {
        return view('livewire.posts');
    }
}
