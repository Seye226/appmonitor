<div class="p-6 lg:p-8 bg-white border-b border-gray-200">

    <h1 class="mt-8 text-2xl font-medium text-gray-900">Liste clients (livewire component)</h1>

    <div class="mt-8 text-2xl font-medium text-gray-900">

        <div>

            <div>
            <h2>Recherche un Client (par nom)</h2>
            <input wire:model="search" type="text">
            <input wire:model.live="search" type="text">
            <input wire:model.live.debounce.300ms="search" type="text">
            <p>Input: {{$search}}</p>
            </div>

            <div>
                searchTermList
                <select wire:model.live.debounce.300ms="searchTerm" name="searchTermName" id="searchTermId">
                    @foreach($searchTermList as $term)
                        <!-- <option wire:click="setSearchTerm('{{--$term--}}')">{{--$term--}}</option> -->
                        <option value="{{$term}}">{{$term}}</option>
                    @endforeach
                </select>

                <p>searchTerm: {{$searchTerm}}</p>
            </div>
        </div>

    </div>


    <h2>Client(s) trouvé(s):</h2>


    <div class="bg-gray-200 bg-opacity-25 grid grid-cols-1 md:grid-cols-2 gap-6 lg:gap-8 p-6 lg:p-8"> 

        <!-- <div> -->

                @foreach($clients as $client)
                <div>

                    <div class="flex items-center">

                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" class="w-6 h-6 stroke-gray-400">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 6.042A8.967 8.967 0 006 3.75c-1.052 0-2.062.18-3 .512v14.25A8.987 8.987 0 016 18c2.305 0 4.408.867 6 2.292m0-14.25a8.966 8.966 0 016-2.292c1.052 0 2.062.18 3 .512v14.25A8.987 8.987 0 0018 18a8.967 8.967 0 00-6 2.292m0-14.25v14.25"></path>
                        </svg>

                        <h3 class="ms-3 text-xl font-semibold text-gray-900">
                            <a href="{{ route('clients.liveclient', $client->id) }}">Client-{{$client->id}} - ref:{{$client->reference}} (Voir details)</a>
                        </h3>

                    </div>

                    <div>

                        <a href="{{ route('clients.liveclient', $client->id) }}" class="{{request()->routeIs('clients.liveclient') ? 'text-indigo-600 underline' : 'text-gray-600 hover:text-indigo-600'}}">
                            Voir details Client
                        </a>
                        <a href="">Voir archives</a>

                    </div>




<livewire:inside.miniclient :mini_client="$client" :wire:key="$client->id">



                </div>
                @endforeach

        <!-- </div> -->
            
    </div>

</div>
