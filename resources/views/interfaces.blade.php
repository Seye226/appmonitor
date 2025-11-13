<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Interfaces') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                
                <h1>Hello ici</h1>

                @if($type == 'sites')

                    <livewire:show-sites/>

                @elseif($type == 'clients')
                
                    <livewire:show-clients/>

                @else

                @endif


            </div>
        </div>
    </div>
</x-app-layout>
