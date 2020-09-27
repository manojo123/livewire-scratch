@if ($sortField !== $field)
    <span></span>
@else
    <svg 
    	class="text-black w-3 h-3 @if(!$sortAsc) transform rotate-180 @endif" 
    	fill="none" 
    	stroke="currentColor" 
    	viewBox="0 0 24 24" 
    	xmlns="http://www.w3.org/2000/svg">
    	<path 
    		stroke-linecap="round" 
    		stroke-linejoin="round" 
    		stroke-width="2" d="M5 15l7-7 7 7">
    	</path>
    </svg>
@endif