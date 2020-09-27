<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Counter') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-4">
            {{-- 
                <div>
                    <span>0</span>
                    <button class="btn btn-dark btn-sm">+</button>
                    <button class="btn btn-dark btn-sm">-</button>
                </div> 
            --}}
                <livewire:counter />
            </div>
        </div>
    </div>
</x-app-layout>