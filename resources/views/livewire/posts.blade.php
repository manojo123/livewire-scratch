<div wire:loading.class="opacity-25">
	@if ($posts)
		<iframe 
	        width="100%" 
	        height="430" 
	        src="{{ $mainPost->video_url }}"
	        frameborder="0" 
	        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
	        allowfullscreen></iframe>

	    <div class="flex mt-2">
	        <svg 
	            class="mx-2 w-6 h-6 text-green-400" 
	            fill="none" 
	            stroke="currentColor" 
	            viewBox="0 0 24 24" 
	            xmlns="http://www.w3.org/2000/svg">
	            <path 
	                stroke-linecap="round"
	                stroke-linejoin="round"
	                stroke-width="2"
	                d="M14 10h4.764a2 2 0 011.789 2.894l-3.5 7A2 2 0 0115.263 21h-4.017c-.163 0-.326-.02-.485-.06L7 20m7-10V5a2 2 0 00-2-2h-.095c-.5 0-.905.405-.905.905 0 .714-.211 1.412-.608 2.006L7 11v9m7-10h-2M7 20H5a2 2 0 01-2-2v-6a2 2 0 012-2h2.5"></path>
	        </svg>
	        <div class="text-sm text-gray-600">{{ $mainPost->thumbs_up }}</div>
	        <svg 
	            class="mx-2 w-6 h-6 text-gray-400 transform rotate-180" 
	            fill="none" 
	            stroke="currentColor" 
	            viewBox="0 0 24 24" 
	            xmlns="http://www.w3.org/2000/svg">
	            <path 
	                stroke-linecap="round"
	                stroke-linejoin="round"
	                stroke-width="2"
	                d="M14 10h4.764a2 2 0 011.789 2.894l-3.5 7A2 2 0 0115.263 21h-4.017c-.163 0-.326-.02-.485-.06L7 20m7-10V5a2 2 0 00-2-2h-.095c-.5 0-.905.405-.905.905 0 .714-.211 1.412-.608 2.006L7 11v9m7-10h-2M7 20H5a2 2 0 01-2-2v-6a2 2 0 012-2h2.5"></path>
	        </svg>
	        <div class="text-sm text-gray-600">{{ $mainPost->thumbs_down }}</div>
	    </div>

	    <div class="flex my-2">
	    	@foreach ($posts as $key => $post)
	    		@if ($post !== $mainPost)
			    	<div class="w-1/4 pr-2">
			            <button wire:click="defineMain({{ $key }})" type="button" class="text-left focus:outline-none">
			                <img 
			                    class="w-full h-40" 
			                    src="{{ $post->image_url }}">
			                <div class="text-sm font-black">{{ $post->title }}</div>
			            </button>
			            <a href="{{ $post->video_url }}" target="_blank"><div class="text-xs font-gray-600">{{ $post->user->name }}</div></a>
			        </div>
	    		@endif
	    	@endforeach	
	    </div>
	@else
		<p class="">There are no results to show.</p>
	@endif
</div>
